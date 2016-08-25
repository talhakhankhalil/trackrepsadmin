<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use CouchbaseCluster; 
use CouchbaseViewQuery;


class actsController extends Controller
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
        
         $query = CouchbaseViewQuery::from('act', 'acts');
        $actsdata = $this->bucket->query($query)->rows;


        if ( count($actsdata) > 0){
            return view('acts.index' , compact('actsdata'));
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
        return view('acts.create');
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
        
        $date_of_governer_assent = $request->input('date_of_governer_assent');
        $title = $request->input('title');
        $id = $request->input('id');
        $act_number = $request->input('act_number');
        $date_of_passing = $request->input('date_of_passing');
        $subject  = $request->input('subject');



        DB::connection('couchbase')->openBucket('default')->insert("act::".$id , ['date_of_governer_assent'=>$date_of_governer_assent,'title' => $title ,'id' => $id, 'act_number' =>  $act_number, 'date_of_passing' =>  $date_of_passing, 'subject' =>   $subject]);

        return redirect('acts/create');
        
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
            ->table('default')->where('id', '=', $id)->get();
        $act = $data->rows;
//        return dd($single_committe);
        return view('acts.show', compact('act'));

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
            ->table('default')->where('id', '=', $id)->get();
        $edit_act = $data->rows;

        return view('acts.edit' , compact('edit_act'));
       
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
        
        $date_of_governer_assent = $request->input('date_of_governer_assent');
        $title = $request->input('title');
        $id = $request->input('id');
        $act_number = $request->input('act_number');
        $date_of_passing = $request->input('date_of_passing');
        $subject  = $request->input('subject');
        
        
        $con = DB::connection('couchbase');
        $bucket = $con->openBucket('default');
        
         
       $bucket->replace("act::".$id , ['date_of_governer_assent'=>$date_of_governer_assent,'title' => $title ,'id' => $id, 'act_number' =>  $act_number, 'date_of_passing' =>  $date_of_passing, 'subject' =>   $subject]);
        return redirect('acts');
        
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
          $bucket->remove("act::".$id);
          return  redirect('acts');
    }
}
