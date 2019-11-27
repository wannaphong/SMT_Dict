<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search as Search;


class SearchController extends Controller
{
    public function home(){
        $data= array('word'=>null);
        return view('search',$data);
    }
    public function getsearch(Request $request){
        $ws=$request->input('word');
        $word=Search::getWord($ws);
        //dd($word);
        $data=array("word"=>$word,"ws"=>$ws);
        return view('search',$data);

    }
    public function autocomplete(Request $request)
    {
        $datas= Search::search($request->input('query'));
        $dataModified = array();
     foreach ($datas as $data)
     {
       $dataModified[] = $data->ws;
     }

    return response()->json($dataModified);
    }


}
