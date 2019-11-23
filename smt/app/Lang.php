<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Lang extends Model
{
    //
    public static function getLang(){
        return DB::table('lang')->get();
    }
    public static function SaveLang($data,$id=null){
        if($id==null){
        DB::table('lang')->insert($data);
        }
        else{
            DB::table('lang')->where('id',$id)
            ->update($data);
        }
    }
}
