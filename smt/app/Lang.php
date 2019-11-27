<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Lang extends Model
{
    //
    public static function getLang($id=null){
        if($id==null){
        return DB::table('lang')->get();
        }
        else{
            return DB::table('lang')->where('lang_id',$id)->get()->first();
        }
    }
    public static function getLangByid($id){
        return DB::table('lang')->where('lang_id',$id)->get()->first();
    }
    public static function SaveLang($data,$id=null){
        if($id==null){
        DB::table('lang')->insert($data);
        }
        else{
            DB::table('lang')->where('lang_id',$id)
            ->update($data);
        }
    }
    public static function dellang($id){
        DB::table('lang')->where('lang_id',$id)->delete();
    }
}
