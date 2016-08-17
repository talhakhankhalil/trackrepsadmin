<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Member;
use CouchbaseCluster; 
use CouchbaseViewQuery;

class memberController extends Controller
{

    public $cluster;
    public $bucket;

    public function __construct(){
        $this->cluster = new CouchbaseCluster("http://168.235.91.84:8091");
        $this->bucket = $this->cluster->openBucket("default");
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = CouchbaseViewQuery::from('mem', 'members');
        $memberdata = $this->bucket->query($query)->rows;
        return view('member.index' , compact('memberdata'));
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_member = $this->bucket->get("member::".$id);
        return view('member.edit' , compact('edit_member'));
        //return var_dump($edit_member);
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
        
      $edited_member = $this->bucket->get("member::".$id);
      $edited_member->update($request->all()); 
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
        
        
    }
}
