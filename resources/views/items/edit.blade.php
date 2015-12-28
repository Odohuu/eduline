@extends('app')
@section('content')
<div style="media">
  <img class="thumbnail"alt="{{ $item->name }}" src="/images/slides/{{ $item->image }}" width="300px">
</div>
<div>
  {!! Form::model($item, ['method' => 'PATCH', 'action' => ['ItemsController@update', $item->id]]) !!}
  
  <div class="form-group">
    {!! Form::label('category_id','Ангилал:') !!}
    {!! Form::select('category_id', $categories, null, ['id' => 'tag_list','class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('slug','Холбоос:') !!}
    {!! Form::text('slug',null, ['class'=>'form-control']) !!}
  </div>
  
  <div class="form-group">
    {!! Form::label('description','Тайлбар:') !!}
    {!! Form::text('description',null, ['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('image','Зургийн цомгийн нүүр зураг:') !!}
    {!! Form::text('image',null, ['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Хадгалах', ['class'=>'btn btn-primary ']) !!}
  </div>
  {!! Form::close() !!}
  {!! Form::model($item, ['method'=>'DELETE', 'action' => ['ItemsController@destroy', $item->id]]) !!}
  <div class="form-group">
    {!! Form::submit('Устгах', ['class'=>'btn btn-danger ']) !!}
  </div>
  {!! Form::close() !!}
</div>
@include('errors.list')
@stop