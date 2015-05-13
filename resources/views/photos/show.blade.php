@extends('app')

@section('content')
    <h1>{{ $photo->name }}</h1>
    <div>{!! Html::image($photo->path, $photo->name, array('width' => 120)) !!}</div>
    <div>{{ $photo->path }}</div>
@stop