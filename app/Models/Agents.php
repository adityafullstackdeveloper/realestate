<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
   	protected $table = 'agent';
   	protected $fillable = ['id','agent_id','user_id','image','name','spouse_name','dob','adhaar','pan','address','post_office','tehsil','latitude','longitude','district','pin','phone','email','password','nominee','relation','dob_nominee','introducer_name','code','qualification','experience','banker_name','branch_name','account_no','ifsc','executive_id','rank','balance','approved','status','created_at','updated_at'];

    public static function add($data){
        if(!empty($data)){
            return self::insertGetId($data);
        }else{
            return false;
        }   
    }

    public static function changeDetail($userID,$data){
        $isUpdated = false;
        $table_agent = \DB::table('agent');
        if(!empty($data)){
            $table_agent->where('user_id','=',$userID);
            $isUpdated = $table_agent->update($data); 
        }
        return (bool)$isUpdated;
    }

   	public static function change($userID,$data){
        $isUpdated = false;
        $table_agent = \DB::table('agent');
        if(!empty($data)){
            $table_agent->where('id','=',$userID);
            $isUpdated = $table_agent->update($data); 
        }
        return (bool)$isUpdated;
    }
}
