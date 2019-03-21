@extends('layouts.app')
@section('content')
    @if (count($matches)>0)
    <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">matches</th>
            <th scope="col">Time</th>
          </tr>
        </thead>
        <tbody> 
        @foreach ($matches as $match)
                <tr>
                    <th scope="row"> {{$match->id}} </th>
                    <td>{{$match->Name}}</td>
                    <td>{{$match->Time}}</td>
                </tr>
        @endforeach
      </tbody>
    </table>
    @else
        <h3>hasn't any matches</h3>
    @endif
@endsection