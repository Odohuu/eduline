@extends('app')

@section('content')

<h1>Зураг оруулах</h1>
    <hr/>

    {!! Form::open(['route' => 'items.store', 'files' => true]) !!}
        
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
            {!! Form::label('image','Зураг:') !!}
            {!! Form::file('image', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Үүсгэх', ['class'=>'btn btn-primary ']) !!}
        </div>

    {!! Form::close() !!}


    @include('errors.list')
@stop