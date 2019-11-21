<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Search extends Model
{
    //

    public static function getWord($word){
        return DB::table('words')->where('ws',$word)->get();
    }
    public static function search($word){
        return DB::table('words')->select('ws')->where("ws","LIKE","%{$word}%")->get();
    }
}
