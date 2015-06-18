@extends('app')

@section('content')

    <h1>Засварлах: {{ $photo->title }}</h1>

    {!! Form::model($photo, ['method' => 'PATCH', 'action' => ['PhotosController@update', $photo->id]]) !!}
        
        <div class="form-group">
            {!! Form::label('name','энгийн зураг:') !!}
            {!! Form::radio('checkImage', 1, true, ['class' => 'field']) !!}
            {!! Form::label('name','мэдээний нүүр зураг:') !!}
            {!! Form::radio('checkImage', 2, false, ['class' => 'field']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('name','name:') !!}
            {!! Form::text('name',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('fileName','Зураг оруулах:') !!}
            {!! Form::file('fileName', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {{ Form::submit('Upload Photo', ['class'=>'btn btn-primary ']) }}
        </div>

        {!! Form::model($photo, ['method'=>'DELETE', 'action' => ['ArticlesController@destroy', $photo->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Устгах', ['class'=>'btn btn-danger ']) !!}
        </div>

    {!! Form::close() !!}

@stop