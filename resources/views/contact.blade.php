@extends('layout')

@section('content')
 <h3>This is contact page.</h3>
 @foreach($data as $key => $value)
    <p>{{$key}} : {{$value}}</p>
 @endforeach
@endsection