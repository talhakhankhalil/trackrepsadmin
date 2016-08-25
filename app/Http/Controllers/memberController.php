<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Member;
use CouchbaseCluster; 
use CouchbaseViewQuery;
use DB;


class memberController extends Controller
{

    public $cluster;
    public $bucket;
    public $member_image;

    public function __construct(){
        $this->cluster = new CouchbaseCluster("http://localhost:8091");
        $this->bucket = $this->cluster->openBucket("default");
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $data =  \DB::connection('couchbase')
            ->table('default')->get();
//                $query = CouchbaseViewQuery::from('mem', 'members');
//                $memberdata = $this->bucket->query($query)->rows;
                $memberdata = $data->rows;
//                return var_dump($memberdata);
          
          
        
        if ( count($memberdata) > 0){
              return view('member.index' , compact('memberdata'));
          }else {
              return "Errror :: Data not found in the database";
          }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $name = $request->input('name');
        $father_name = $request->input('father_name');
        $constituency = $request->input('constituency');
        $seat_type = $request->input('seat_type');
        $profession = $request->input('profession');
        $department = $request->input('department');
        $cabinet_post = $request->input('cabinet_post');
        $party = $request->input('party');
        $date_of_birth = $request->input('date_of_birth');
        $religon = $request->input('religon');
        $marital_status = $request->input('marital_status');
        $gender = $request->input('gender');
        $education = $request->input('education');
        $present_contact = $request->input('present_contact');
        $permanent_contact = $request->input('permanent_contact');


      
        
        if ($file =  $request->file('member_image')){

        $this->member_image = $file->getClientOriginalName();
            $file->move('images',$this->member_image);    
        }
        
         $data =  \DB::connection('couchbase')
            ->table('default')->get();
          
           $memberdata = $data->rows;
        
        
        foreach($memberdata as $member){
            
            if ($constituency == $member->default->constituency){
                die('The key already exist in the DB');
            }
            
        }


        DB::connection('couchbase')->openBucket('default')->insert("mpa::".$constituency , ['name'=>$name,'father_name' => $father_name,'constituency' => $constituency, 'seat_type' => $seat_type , 'profession' => $profession , 'department' => $department , 'cabinet_post' => $cabinet_post, 'party' => $party, 'date_of_birth' => $date_of_birth, 'religon' => $religon,'marital_status' => $marital_status,'gender' => $gender,'education' => $education,'present_contact' => $present_contact,'permanent_contact' => $permanent_contact,'member_image' => $this->member_image]);

        return redirect('member/create');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $data =    \DB::connection('couchbase')
            ->table('default')->where('constituency', '=', $id)->get();
        $single_member = $data->rows;
//        return dd($single_member);
        return view('member.show', compact('single_member'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data =    \DB::connection('couchbase')
            ->table('default')->where('constituency', '=', $id)->get();
        $edit_member = $data->rows;
//        return var_dump($edit_member);
        return view('member.edit' , compact('edit_member'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        
        $name = $request->input('name');
        $father_name = $request->input('father_name');
        $constituency = $request->input('constituency');
        $seat_type = $request->input('seat_type');
        $profession = $request->input('profession');
        $department = $request->input('department');
        $cabinet_post = $request->input('cabinet_post');
        $party = $request->input('party');
        $date_of_birth = $request->input('date_of_birth');
        $religon = $request->input('religon');
        $marital_status = $request->input('marital_status');
        $gender = $request->input('gender');
        $education = $request->input('education');
        $present_contact = $request->input('present_contact');
        $permanent_contact = $request->input('permanent_contact');
//        $file =  $request->input('member_image');
//        $member_image = $file->getClientOriginalName();


        if ($file =  $request->file('member_image')){

            $this->member_image = $file->getClientOriginalName();
            $file->move('images',$this->member_image);    
        }

        
        
        $con = DB::connection('couchbase');
        $bucket = $con->openBucket('default');
        
        $bucket->replace("mpa::".$id , ['name' => $name, 'father_name' => $father_name, 'constituency' => $constituency,'seat_type' => $seat_type ,'profession' => $profession,'department' =>$department,'cabinet_post' => $cabinet_post,'party' => $party,'date_of_birth' =>$date_of_birth,'religon' => $religon,'marital_status' => $marital_status,'gender' =>  $gender,'education' => $education,'present_contact' => $present_contact , 'permanent_contact' => $permanent_contact , 'member_image' => $this->member_image]);

        return redirect('member');
        
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $con = DB::connection('couchbase');
        $bucket = $con->openBucket('default');
         $bucket->remove("mpa::".$id);
        return  redirect('member');
    }
}
