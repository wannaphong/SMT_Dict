<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lang as Lang;

class LangController extends Controller
{
    public function AddWord(){
        $list_lang=Lang::getLang();
        $data=array('lang'=>$list_lang,'word'=>null);
        return view('addword',$data);
    }
    public function Addlang(){
        return view('addlang');
    }
    public function show_list_lang(){
        $list_lang=Lang::getLang();
        $data=array('langs'=>$list_lang);
        return view('listlang',$data);
    }
    public function postLang(Request $request){
        //dd($request->all());
        $name=$request->input('name');
        $code=$request->input('code');

        $data=array('name'=>$name,'code'=>$code);
        $add=Lang::SaveLang($data);
        return redirect("lang");
    }

}
