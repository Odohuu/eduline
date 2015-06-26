@extends('app')

@section('content')

    <h1>Зураг оруулах</h1>
    <hr/>

    {!! Form::open(['route' => 'photos.store', 'files' => true]) !!}
        
        <div class="form-group">
            {!! Form::label('name','  энгийн зураг:') !!}
            {!! Form::radio('checkImage', 1, true, ['class' => 'field']) !!}
            {!! Form::label('name','  мэдээний нүүр зураг:') !!}
            {!! Form::radio('checkImage', 2, false, ['class' => 'field']) !!}
            {!! Form::label('name','  Фото цомгийн зураг:') !!}
            {!! Form::radio('checkImage', 3, false, ['class' => 'field']) !!}
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
            {!! Form::submit('Upload Photo', ['class'=>'btn btn-primary ']) !!}
        </div>

    {!! Form::close() !!}

@stop