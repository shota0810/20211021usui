<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class TestController extends Controller
{
    public function build(){
    
    return view('index',['txt' => '建物です']);
    }
    public function room($room){

    return view('index',['txt' => '部屋番号は'.$room.'です。']);
    }

}
