<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  
    function index(){
        return view('Home.index');
    }
    function register($id=0){
        if($id==0)
            return view('Home.register');
    }
    function login(){
        return view('Home.login');
    }
    function about(){
        return view('Home.about');
    }
}
