<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    //

    public static function getWord($word){
        return DB::table('words')->where('ws',$word)->get()->first();
    }
}
