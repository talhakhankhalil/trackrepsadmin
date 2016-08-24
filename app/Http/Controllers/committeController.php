<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use CouchbaseCluster; 
use CouchbaseViewQuery;



class committeController extends Controller
{



    public $cluster;
    public $bucket;


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
        //



        $query = CouchbaseViewQuery::from('com', 'committee');
        $committedata = $this->bucket->query($query)->rows;


        if ( count($committedata) > 0){
            return view('committe.index' , compact('committedata'));
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
        return view('committe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $committe_name = $request->input('committe_name');
        $committe_type = $request->input('committe_type');
        $committe_chairman = $request->input('committe_chairman');
        $committe_members = $request->input('committe_members');


        DB::connection('couchbase')->openBucket('default')->insert("committe::".$committe_name , ['committe_name'=>$committe_name,'committe_type' => $committe_type,'committe_chairman' => $committe_chairman, 'committe_members' => $committe_members]);

        return redirect('committe/create');
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
            ->table('default')->where('committe_name', '=', $id)->get();
        $single_committe = $data->rows;
//        return dd($single_committe);
        return view('committe.show', compact('single_committe'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data =    \DB::connection('couchbase')
            ->table('default')->where('committe_name', '=', $id)->get();
        $edit_committe = $data->rows;

        return view('committe.edit' , compact('edit_committe'));
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
        //
        
        $committe_name = $request->input('committe_name');
        $committe_type = $request->input('committe_type');
        $committe_chairman = $request->input('committe_chairman');
        $committe_members = $request->input('committe_members');
        
        
        $con = DB::connection('couchbase');
        $bucket = $con->openBucket('default');
        
         $bucket->replace("committe::".$id , ['committe_name'=>$committe_name,'committe_type' => $committe_type,'committe_chairman' => $committe_chairman, 'committe_members' => $committe_members]);

        return redirect('committe');
        
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
          $bucket->remove("committe::".$id);
          return  redirect('committe');
    }
}
