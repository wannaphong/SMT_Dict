<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Admin extends Model
{
    //
    public static function Listword($id=null){
        if($id==null){
        return DB::table('words')
        //->join('lang','lang.id','words.lang_m')
        ->get();
        }
        else{
            return DB::table('words')->where('id',$id)->get()->first();
        }
    }
    public static function SaveWord($data,$id=null){
        if($id==null){
        DB::table('words')->insert($data);
        }
        else{
            DB::table('words')->where('id',$id)
            ->update($data);
        }
    }
}