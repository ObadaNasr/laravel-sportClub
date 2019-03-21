@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Player') }}</div>

                <div class="card-body">
                        {!! Form::open(['action' =>'UserController@store','method'=>'post']) !!}
                        @csrf

                        <div class="form-group row">
                            
                            {{Form::label(__('First Name'),'First Name', 'class = col-md-4 col-form-label text-md-right')}}
                            <div class="col-md-6">
                                {{Form::text('firstName','',['class'=>"form-control" ,'placeholder'=>'Enter your first name'])}}
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
                                {{Form::text('lastName','',['class'=>"form-control" ,'placeholder'=>'ُEnter your last name'])}}
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
                                {{Form::email('email','',['class'=>"form-control" ,'placeholder'=>'Enter your email'])}}
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                                {{Form::label(__('password') ,'password', 'class = col-md-4 col-form-label text-md-right')}}
                                <div class="col-md-6">
                                    {{Form::password('password',['class'=>"form-control" ,'placeholder'=>'Enter the password'])}}
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>

                        <div class="form-group row">
                                {{Form::label(__('confirm_password') ,'Confirm Password', 'class = col-md-4 col-form-label text-md-right')}}
                                <div class="col-md-6">
                                    {{Form::password('password_confirmation',['class'=>"form-control" ,'placeholder'=>'Confirm password'])}}
                                    @if ($errors->has('confirm_password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('confirm_password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {{Form::submit( __('Register'),['class'=>'btn btn-primary'])}}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
