<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function createMatch()
    {
        if(auth()->user()->Type==2){
            return view('Trainer.createMatch');
        }else{
            return redirect('/home');
        }
    }
    public function addPlayer()
    {
        if(auth()->user()->Type==2){
            return view('Trainer.addPlayer');
        }else{
            return redirect('/home');
        }
    }
     
}
