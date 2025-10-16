<?php

namespace App\Http\Controllers;

class indexController extends Controller
{
    //
    public function index()
    {
        return view('index',["contactTitle"=>"contact from controller for index"]);
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact',["contactTitle"=>"contact from controller for about"]);
    }
}
