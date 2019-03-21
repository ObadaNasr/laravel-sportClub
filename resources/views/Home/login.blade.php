@extends('layouts.app')
@section('content')
    <h1>Sign In</h1>
    {!! Form::open(['action' =>'userController@index','method'=>'post']) !!}
    <div class="form-group">
        {{Form::label('email','Email')}}
        {{Form::email('email','',['class'=>'form-control','placeholder'=>'Email'])}}
    </div>
    <div class="form-group">
        {{Form::label('password','Password')}}
        {{Form::password('password',['class'=>'form-control','placeholder'=>'Password'])}}
    </div>
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection