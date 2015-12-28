@extends('app2')

@section('content')
    
    <div class="container show-left">
    	<hr />
      	<h4>{{$album->name}}</h4>
      	<div>{!! $album->description !!}</div>
    </div>
    <div class="space"></div>
@stop