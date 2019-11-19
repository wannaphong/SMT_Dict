<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lang as Lang;

class LangController extends Controller
{
    public function AddWord(){
        $list_lang=Lang::getLang();
        $data=array('lang'=>$list_lang);
        return view('addword',$data);
    }
}
