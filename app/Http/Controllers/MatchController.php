<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\match;
class MatchController extends Controller
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
    public function index($id=0)
    { 
        if(auth()->user()->Type==2){
            $matches = match::all();
            if($id==0){
                return view('Trainer.matches')-> with('matches',$matches);
            }else{
                $data=array(
                    'matches'=>$matches,
                    'id'=>$id
                );
                return view('Trainer.playerInMatch')->with('data',$data);
            }
        }else{
            return redirect('/home');
        }
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
            $this->validate($request,[
                'Name'=>['required', 'string', 'max:255'],
                'Time'=>['required']
            ]);
            $match=new match;
            $match->Name=$request->input('Name');
            $match->Date=$request->input('Date');
            $match->Time=$request->input('Time');
            $match->save();

            return redirect('/home')->with('success','Match was created');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        if(auth()->user()->Type==2){
            $match=match::find($id);
            return view('Trainer.editMatch')->with('match',$match);
        }else{
            return redirect('/home');
        }
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
        
        if(auth()->user()->Type==2){
            $this->validate($request, [
                'Name' => ['required', 'string', 'max:255'],
                'Time' => ['required'],
                'Date' => ['required']            
            ]);
            $match=match::find($id);
            $match->Name=$request->input('Name');
            $match->Time=$request->input('Time');
            $match->Date=$request->input('Date');
            $match->save();
            return redirect('/match')->with('success','Success Edited');
        }else{
            return redirect('/home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth()->user()->Type==2){
            $match=match::find($id);
            $match->delete();
            return redirect('/match')->with('success','Success Deleted');    
        }else{
            return redirect('/home');
        }
    }
}
