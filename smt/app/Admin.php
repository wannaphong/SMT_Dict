<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Admin extends Model
{
    //
    public static function Listword(){
        return DB::table('words')
        //->join('lang','lang.id','words.lang_m')
        ->get();
    }
    public static function SaveNewWord($data){
        DB::table('words')->insert($data);
    }
}
