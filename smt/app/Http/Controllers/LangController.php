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
        return view('addlang',['lang'=>null]);
    }
    public function edit($lang_id){
        //$lang_id=$request->input('id');
        $txt=Lang::getLangByid($lang_id);
        //dd($lang_id);
        $data=array('lang'=>$txt);
        return view('addlang',$data);
    }
    public function show_list_lang(){
        $list_lang=Lang::getLang();
        $data=array('langs'=>$list_lang);
        return view('listlang',$data);
    }
    public function updatelang(Request $request){
        //dd($request->all());
        $id=$request->input('id');
        $name=$request->input('name');
        $code=$request->input('code');

        $data=array('name'=>$name,'code'=>$code,'lang_id'=>$id);
        $add=Lang::SaveLang($data,$id);
        return redirect("lang");
    }
    public function postLang(Request $request){
        //dd($request->all());
        $name=$request->input('name');
        $code=$request->input('code');

        $data=array('name'=>$name,'code'=>$code);
        $add=Lang::SaveLang($data);
        return redirect("lang");
    }
    public function del_lang($id){
        //$lang_id=$request->input('id');
        Lang::dellang($id);
        return redirect("lang");
    }

}
