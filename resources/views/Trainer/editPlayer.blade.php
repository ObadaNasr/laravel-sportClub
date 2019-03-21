@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Player') }}</div>

                <div class="card-body">
                        {!! Form::open(['action' =>['UserController@update',$user->id],'method'=>'post']) !!}
                        @csrf

                        <div class="form-group row">
                            
                            {{Form::label(__('First Name'),'First Name', 'class = col-md-4 col-form-label text-md-right')}}
                            <div class="col-md-6">
                                {{Form::text('firstName',$user->first_Name,['class'=>"form-control" ,'placeholder'=>'Enter your first name'])}}
                                @if ($errors->has('firstName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            
                            {{Form::label(__('Last Name'),'Last Name', 'class = col-md-4 col-form-label text-md-right')}}
                            <div class="col-md-6">
                                {{Form::text('lastName',$user->last_Name,['class'=>"form-control" ,'placeholder'=>'ُEnter your last name'])}}
                                @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            {{Form::label(__('E-Mail Address') ,'E-Mail Address', 'class = col-md-4 col-form-label text-md-right')}}
                            <div class="col-md-6">
                                {{Form::email('email',$user->email,['class'=>"form-control" ,'placeholder'=>'Enter your email',' disabled'])}}
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {{Form::hidden('_method','PUT')}}
                                {{Form::submit( __('Edit'),['class'=>'btn btn-primary'])}}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
