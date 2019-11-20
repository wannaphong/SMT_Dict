<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search as Search;


class SearchController extends Controller
{
    public function getsearch($word){
        $ws=$request->input('ws',$word);
        $word=Search::getWord($ws);
        $data=array("word"=>$word)
        return redirect("admin");

    }

       
}
 