@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                        {!! Form::open(['action' =>'MatchController@store','method'=>'post']) !!}
                        <div class="form-group">
                            {{Form::label('Name','Name')}}
                            {{Form::text('Name','',['class'=>'form-control','placeholder'=>'Name'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('date','Date')}}
                                {{Form::date('Date',\Carbon\Carbon::now(),['class'=>'form-control','placeholder'=>'Date'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('Time','Time')}}
                            {{Form::time('Time',\Carbon\Carbon::now(),['class'=>'form-control','placeholder'=>'Time'])}}
                        </div>
                        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

