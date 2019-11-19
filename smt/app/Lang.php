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
}
