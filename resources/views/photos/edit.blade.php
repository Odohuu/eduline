@extends('app')

@section('content')

    <h1>Зураг</h1>
    <hr/>

    {!! Form::model($photo,['method' => 'PATCH', 'action' => ['PhotosController@update', $photo->id]]) !!}
        <div class="form-group">
            {!! Form::label('path','name:') !!}
            {!! Form::text('path',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('name','name:') !!}
            {!! Form::text('name',null, ['class'=>'form-control']) !!}
        </div>
        {!! Html::image($photo->path, $photo->name) !!}
        <div class="form-group">
            {!! Form::label('fileName','Зураг оруулах:') !!}
            {!! Form::file('fileName', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Upload Photo', ['class'=>'btn btn-primary ']) !!}
        </div>

    {!! Form::close() !!}

@stop