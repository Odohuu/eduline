@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Нийтлэлүүд</div>
    <div class="panel-body">
        {!! Form::open(['route' => 'admin.settings.store', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::label('mainslide1','Слайд 1:') !!}
            {!! Form::text('slide_title_1', Cache::get('settings_slide_title_1', ''), ['placeholder'=>'Гарчиг','class'=>'form-control']) !!}
            <br />
            {!! Form::text('slide_path_1', Cache::get('settings_slide_path_1', ''), ['placeholder'=>'Зураг','class'=>'form-control']) !!}
            <br />
            {!! Form::text('slide_link_1', Cache::get('settings_slide_link_1', ''), ['placeholder'=>'Холбоос','class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('mainslide2','Слайд 2:') !!}
            {!! Form::text('slide_title_2', Cache::get('settings_slide_title_2', ''), ['placeholder'=>'Гарчиг','class'=>'form-control']) !!}
            <br />
            {!! Form::text('slide_path_2', Cache::get('settings_slide_path_2', ''), ['placeholder'=>'Зураг','class'=>'form-control']) !!}
            <br />
            {!! Form::text('slide_link_2', Cache::get('settings_slide_link_2', ''), ['placeholder'=>'Холбоос','class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Хадгалах', ['class'=>'btn btn-primary ']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div class="space"></div>
@stop