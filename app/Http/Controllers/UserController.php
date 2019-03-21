<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserController extends Controller
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
        if(auth()->user()->Type==2){
            $players= User::where('Type',1)->paginate(6);
            return view('Trainer.players')->with('players',$players);
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
            $this->validate($request, [
                'firstName' => ['required', 'string', 'max:255'],
                'lastName' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
            $player=new User;
            $player->first_Name=$request->input('firstName');
            $player->last_Name=$request->input('lastName');
            $player->email=$request->input('email');
            $player->password= Hash::make($request->input('password'));
            $player->Type=1;        
            $player->save(); 
        }
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(auth()->user()->id==$id){
            $player=User::find($id);
            
        }else{
            $player=User::find(auth()->user()->id);
        }
        return view('Player.index')->with('player',$player);
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
            $user=User::find($id);
            return view('Trainer.editPlayer')->with('user',$user);
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
                'firstName' => ['required', 'string', 'max:255'],
                'lastName' => ['required', 'string', 'max:255'],
                
            ]);
            $player=User::find($id);
            $player->first_Name=$request->input('firstName');
            $player->last_Name=$request->input('lastName');
            $player->email=$request->input('email');
            $player->Type=1;        
            $player->save();
        }
        return redirect('/home');
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
            $user=User::find($id);
            $user->delete();
            return redirect('/home')->with('success','Player are Removed');
        }else{
            return redirect('/home');
        }
    }
}
