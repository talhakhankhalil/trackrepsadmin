<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
     public static $bucket = "";
   
    public function __construct(){
        $cluster = new CouchbaseCluster("couchbase://127.0.0.1");
        Member::$bucket = $cluster->openBucket("default");
    }
    
   

    protected $table = '';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public static $couchbase_bucket = 'default';
    public static $couchbase_doc = 'doc1';
    protected $fillable = [
            'id',
            'name',
            'father_name',
            'constituency' ,
            'seat_type',
            'profession' ,
            'deprtment' ,
            'cabinet_post',
            'party',
            'date_of_birth',
            'religon' ,
            'marital_status',
            'gender' ,
            'education',
            'present_contact',
            'permanent_contact',
            'member_image'
    ];




    public static function create(array $attributes = array()){
      //die(print_r($attributes));
        $value = [
           'id' => intval($attributes['id']),
            'name' => $attributes['name'],
            'father_name' => $attributes['father_name'],
            'constituency' => $attributes['constituency'],
            'seat_type' => $attributes['seat_type'],
            'profession' => $attributes['profession'],
            'deprtment' => $attributes['department'],
            'cabinet_post' => $attributes['cabinet_post'],
            'party' => $attributes['party'],
            'date_of_birth' => $attributes['date_of_birth'],
            'religon' => $attributes['religon'],
            'marital_status' => $attributes['marital_status'],
            'gender' => $attributes['gender'],
            'education' => $attributes['education'],
            'present_contact' => $attributes['present_contact'],
            'permanent_contact' => $attributes['permanent_contact'],
            'member_image' => $attributes['member_image'],
        ];
        $key = 'mem::1';
       $val = \DB::connection('couchbase')->table("default")->key($key)->insert($value);
        
//        Member::$bucket->upsert("member1", array('name'=>'name','father_name'=>'father_name','constituency'=>'constituency','seat_type'=>'seat_type','profession'=>'profession','department'=>'department','cabinet_post'=>'cabinet_post','party'=>'party','date_of_birth'=>'date_of_birth','religon'=>'religon','marital_status'=>'marital_status','gender'=>'gender','education'=>'education','present_contact'=>'present_contact','permanent_contact'=>'permanent_contact','member_image'=>'member_image'));
        
    
        
       return $val;
        
       // Member::$bucket->key("member::1")->upsert($value);
    }



    public static function all($columns = array()){
        return \DB::connection('couchbase')->table(self::$couchbase_bucket)->get();
        
//        DB::connection('couchbase')
//    ->table('testing')->where('whereKey', 'value')->get();
    }




    public static function one($id){
        return \DB::connection('couchbase')->table(self::$couchbase_bucket)->where('id',$id)->get();
    }
}
