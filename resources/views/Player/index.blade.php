@extends('layouts.app')
@section('content')
    <ul class="list-group">
        <li class="list-group-item"><strong>ID: </strong> {{$player->id}}</li>
        <li class="list-group-item"><strong>Name:  </strong>{{$player->first_Name}} {{$player->last_Name}}</li>
        <li class="list-group-item"><strong>Email:  </strong>{{$player->email}}</li>
    </ul>    
@endsection