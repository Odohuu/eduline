@extends('app')

@section('content')

<h2>Зураг оруулах</h2>
    <hr/>
{!! Form::open(['route' => 'zurag.store', 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('image','Зураг оруулах:') !!}
            {!! Form::file('image', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description','тайлбар:') !!}
            {!! Form::text('description',null, ['class'=>'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('album_id','Ангилал:') !!}
            {!! Form::select('album_id', $album_names, null, ['id' => 'tag_list','class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('зураг нэмэх', ['class'=>'btn btn-primary ']) !!}
        </div>

{!! Form::close() !!}


@stop