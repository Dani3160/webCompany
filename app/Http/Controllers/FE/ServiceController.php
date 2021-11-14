<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index($param)
    {
        if($param == "en"){
            $language = 'en';
        }else{
            $language = 'id';
        }
        return view('service', compact('language'));
    }
}
