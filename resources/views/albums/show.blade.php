@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="page-header">
      	<h3>{{$album->name}}</h3>
          </div>
      	<div>{!! $album->description !!}</div>
    </div>
    <div class="space"></div>
@endsection