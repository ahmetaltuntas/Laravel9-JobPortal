<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home.index');
    }
    public function notfound(){
        return view('errors.404');
    }
    public function aboutus(){
        return view('home.about-us');
    }
    public function faqs(){
        return view('home.faqs');
    }
}
