<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\match;
use App\PlayerInMatch;
use Illuminate\Validation\Rule;
class PIM extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return match::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->Type==2){
            if(count(PlayerInMatch::where(['IDM'=>$request->input('IDMatch'),'IDP'=>$request->input('IDPlayer')])->get())>0) return redirect('/players')->with('error','Faild: This Player is already in match');
            $playerInMatch=new PlayerInMatch;
            $playerInMatch->IDM=$request->input('IDMatch');
            $playerInMatch->IDP=$request->input('IDPlayer');
            $playerInMatch->save();
            return redirect('/players')->with('success','success: Add Player in Match');
        }else{
            return redirect('/home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(auth()->user()->id== $id){
            $PinM=PlayerInMatch::where('IDP',$id)->get();
            $match=array();
            $i=0;
            foreach($PinM as $pi){
                $match[$i++]=match::find($pi->IDM);
            }
            return view('Player.matches')->with('matches',$match);
        }
        return redirect('/home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
