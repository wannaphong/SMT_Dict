<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin as Admin;
use App\Lang as Lang;

class AdminController extends Controller
{
    //
    public function getlistword(){
        $listword=Admin::Listword();
        //dd($listword);
        $data=array('words'=>$listword);
        return view("listword",$data);
    }
    public function postWord(Request $request){
        //dd($request->all());
        $ws=$request->input('ws');
        $lang_ws=$request->input('lang_ws');
        $meaning=$request->input('meaning');
        $lang_m=$request->input('lang_m');

        $data=array('ws'=>$ws,'lang_ws'=>$lang_ws,'meaning'=>$meaning,'lang_m'=>$lang_m);
        $add=Admin::SaveWord($data);
        return redirect("admin");
    }
    public function updateWord(Request $request){
        $ws=$request->input('ws');
        $lang_ws=$request->input('lang_ws');
        $meaning=$request->input('meaning');
        $lang_m=$request->input('lang_m');
        $id=$request->input('id');

        $data=array('ws'=>$ws,'lang_ws'=>$lang_ws,'meaning'=>$meaning,'lang_m'=>$lang_m);
        $add=Admin::SaveWord($data,$id);
        return redirect("admin");
    }
    public function edit($id){
        $word=Admin::Listword($id);
        $list_lang=Lang::getLang();
        $data=array('word'=>$word,'lang'=>$list_lang);
        return view('addword',$data);
    }
}
