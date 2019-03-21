@extends('layouts.app')

@section('content')
<div class="container">
@if(Auth::user()->Type==2)
    <h1 class="jumbotron-heading">Hello {{Auth::user()->First_Name}}</h1>
    <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
    <p>
    <a href="/home/createMatch" class="btn btn-primary my-2">Create Matches</a>
    <a href="/home/addPlayer" class="btn btn-secondary my-2">Add Player</a>
    </p> 
   
@else

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
   
@endif
</div> 
@endsection
