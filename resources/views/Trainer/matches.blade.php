@extends('layouts.app')
@section('content')
    @if (count($matches)>0)
    <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">matches</th>
            <th scope="col">Time</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            
          </tr>
        </thead>
        <tbody> 
        @foreach ($matches as $match)
                <tr>
                    <th scope="row"> {{$match->id}} </th>
                    <td>{{$match->Name}}</td>
                    <td>{{$match->Time}}</td>
                    <td style="width:7rem;"><a href="/match/{{$match->id}}/edit"  class="btn btn-primary">Edit</a></td>
                    <td  style="width:7rem;">
                      {!!Form::open(['action' =>['MatchController@destroy', $match->id],'method'=>'post'])!!}
                         {{Form::hidden('_method','DELETE')}}
                         {{Form::submit('Delete',[ 'class' => 'btn btn-danger'])}}
                      {!!Form::close()!!}                    
                    </td>
                </tr>
        @endforeach
      </tbody>
    </table>
    @else
        <h3>hasn't any matches</h3>
    @endif
@endsection