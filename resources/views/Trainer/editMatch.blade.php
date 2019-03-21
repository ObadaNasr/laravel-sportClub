@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                        {!! Form::open(['action' =>['MatchController@update',$match->id],'method'=>'post']) !!}
                        <div class="form-group">
                            {{Form::label('Name','Name')}}
                            {{Form::text('Name',$match->Name,['class'=>'form-control','placeholder'=>'Name'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('date','Date')}}
                                {{Form::date('Date',$match->Date,['class'=>'form-control','placeholder'=>'Date'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('Time','Time')}}
                            {{Form::time('Time',$match->Time,['class'=>'form-control','placeholder'=>'Time'])}}
                        </div>
                        {{Form::hidden('_method','PUT')}}
                        {{Form::submit('Edit',['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

