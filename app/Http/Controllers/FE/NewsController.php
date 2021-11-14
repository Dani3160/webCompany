<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($param)
    {
        if($param == "en"){
            $language = 'en';
        }else{
            $language = 'id';
        }
        return view('news', compact('language'));
    }
}
