<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin as Admin;
use App\Lang as Lang;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getlistword(){
        $listword=Admin::Listword();
       // dd($listword);
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
        return redirect("word");
    }
    public function updateWord(Request $request){
        $ws=$request->input('ws');
        $lang_ws=$request->input('lang_ws');
        $meaning=$request->input('meaning');
        $lang_m=$request->input('lang_m');
        $id=$request->input('id');

        $data=array('ws'=>$ws,'lang_ws'=>$lang_ws,'meaning'=>$meaning,'lang_m'=>$lang_m);
        $add=Admin::SaveWord($data,$id);
        return redirect("word");
    }
    public function edit($id){
        $word=Admin::Listword($id);
        $list_lang=Lang::getLang();
       // dd($word);
        $data=array('word'=>$word,'lang'=>$list_lang);
        return view('addword',$data);
    }
    public function del_word($id){
        Admin::delword($id);
        return redirect("word");
    }
}
