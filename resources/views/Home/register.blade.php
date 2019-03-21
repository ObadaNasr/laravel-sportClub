@extends('layouts.app')
@section('content')
    <h1>Register</h1>
    {!! Form::open(['action' =>'UserController@store','method'=>'post']) !!}
    <div class="form-group">
            {{Form::label('fname','Name')}}
            {{Form::text('fname','',['class'=>'form-control','placeholder'=>'First Name'])}}
    </div>
    <div class="form-group">
            {{Form::label('lname','Name')}}
            {{Form::text('lname','',['class'=>'form-control','placeholder'=>'Last Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email','Email')}}
        {{Form::email('email','',['class'=>'form-control','placeholder'=>'Email'])}}
    </div>
    <div class="form-group">
            {{ Form::select('size', [1 => 'Player', 2 => 'Trainer'], null, ['placeholder' => 'Type User'])}}

    </div>
    <div class="form-group">
        {{Form::label('password','Password')}}
        {{Form::password('password',['class'=>'form-control','placeholder'=>'Password'])}}
    </div>
    <div class="form-group">
            {{Form::label('Cpassword','Confirm Password')}}
            {{Form::password('Cpassword',['class'=>'form-control','placeholder'=>'Confirm Password'])}}
        </div>
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection