@extends('layouts.app')
@section('content')
<div class="card-columns" >
    @if (count($data['matches'])>0)
        @foreach ($data['matches'] as $match)
        {!! Form::open(['action' =>'PIM@store','method'=>'post']) !!}
                <div class="card">
                    <div class="card-body">
                        <input  type="text" class="card-title" name="IDPlayer" value="{{$data['id']}}" hidden readonly style="width: 230px;margin:5px 50px;padding:0 10px;border-style: inherit;background: white;text-align: center;font-weight: bold;font-size: 1.4em;">
                        <input  type="text" class="card-title" name="IDMatch" value="{{$match->id}}" hidden readonly style="width: 230px;margin:5px 50px;padding:0 10px;border-style: inherit;background: white;text-align: center;font-weight: bold;font-size: 1.4em;">
                         <input  type="text" class="card-text" name="NameMatch" value="{{$match->Name}}" style="width: 230px;margin:5px 50px;padding:0 10px;border-style: inherit;background: white;text-align: center;" readonly>
                         <input  type="text" class="card-text" name="DateMatch" value="{{$match->Date}}" style="width: 230px;margin:5px 50px;padding:0 10px;border-style: inherit;background: white;text-align: center;" readonly>
                         <input  type="text" class="card-text" name="TimeMatch" value="{{$match->Time}}" style="width: 230px;margin:5px 50px;padding:0 10px;border-style: inherit;background: white;text-align: center;" readonly>
                        {{Form::submit('Add' ,[ 'class' => 'btn btn-primary'])}}  
                    </div>
                </div>
                {!!Form::close()!!}
        @endforeach
    @else
        <h3>hasn't any player</h3>
    @endif    
</div>
@endsection