<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Member;

class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     //public static $bucket = "";
   
   
//        $cluster = new CouchbaseCluster("couchbase://127.0.0.1");
//        $bucket = $cluster->openBucket("default");
    
    
    
    public function index()
    {
        //
        $memberdata = Member::all();
        
        return view('member.index');
        
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
//        //
//        
//        $value = [
//           'id' => intval($attributes['id']),
//            'name' => $attributes['name'],
//            'father_name' => $attributes['father_name'],
//            'constituency' => $attributes['constituency'],
//            'seat_type' => $attributes['seat_type'],
//            'profession' => $attributes['profession'],
//            'deprtment' => $attributes['department'],
//            'cabinet_post' => $attributes['cabinet_post'],
//            'party' => $attributes['party'],
//            'date_of_birth' => $attributes['date_of_birth'],
//            'religon' => $attributes['religon'],
//            'marital_status' => $attributes['marital_status'],
//            'gender' => $attributes['gender'],
//            'education' => $attributes['education'],
//            'present_contact' => $attributes['present_contact'],
//            'permanent_contact' => $attributes['permanent_contact'],
//            'member_image' => $attributes['member_image'],
//        ];
//        
        
//         Member::$bucket->upsert("member1", array('name'=>'name','father_name'=>'father_name','constituency'=>'constituency','seat_type'=>'seat_type','profession'=>'profession','department'=>'department','cabinet_post'=>'cabinet_post','party'=>'party','date_of_birth'=>'date_of_birth','religon'=>'religon','marital_status'=>'marital_status','gender'=>'gender','education'=>'education','present_contact'=>'present_contact','permanent_contact'=>'permanent_contact','member_image'=>'member_image'));
//        
        
//        $key = 'mem::1';
////       $val = \DB::connection('couchbase')->table("default")->key($key)->insert(["name" => "khalil", "class" => "abc"]);
//        
//       $bucket->upsert("mem1",["name" => "khalil", "class" => "abc"]);
//       // return $val;
      
        
        // $input = $request->all();
//	    Member::create($input);
//	    return redirect('member/index');
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
        //
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
