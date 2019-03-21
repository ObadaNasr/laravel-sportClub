@extends('layouts.app')
@section('content')
<div class="card-columns" >
    @if (count($players)>0)
        @foreach ($players as $player)
        {!! Form::open(['action' =>['UserController@destroy', $player->id],'method'=>'post']) !!}
                <div class="card">
                    <img src="img/player.png" class="card-img-top" style="width:200px;height: 220px; margin:10px 77px;">
                    <div class="card-body">
                        <input  type="text" class="card-title" name="playerName" value="{{$player->first_Name}} {{$player->last_Name}}" readonly style="width: 230px;margin:5px 50px;padding:0 10px;border-style: inherit;background: white;text-align: center;font-weight: bold;font-size: 1.4em;">
        
                         <input  type="text" class="card-text" name="EmailPlayer" value="{{$player->email}}" style="width: 230px;margin:5px 50px;padding:0 10px;border-style: inherit;background: white;text-align: center;" readonly>
                         <a class="btn btn-primary" style="color: aliceblue" href="/matches/{{$player->id}}">Add In Match</a>
                         <a class="btn btn-secondary" style="color: aliceblue" href="/user/{{$player->id}}/edit">Edit</a>  
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete' ,[ 'class' => 'btn btn-danger'])}}
                         
                         
                    </div>
                </div>
                {!!Form::close()!!}
        @endforeach
    @else
        <h3>hasn't any player</h3>
    @endif    
</div>
{{$players->links()}}
@endsection