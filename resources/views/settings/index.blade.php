@extends('app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Нийтлэлүүд</div>
    <div class="panel-body">
        {!! Form::open(['route' => 'settings.store', 'files' => true]) !!}
        
        <div class="form-group">
            {!! Form::label('home_video','Нүүр хуудасны бичлэг:') !!}
            {!! Form::text('home_video', Cache::get('settings_home_video', ''), ['size' => '30x5','class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('home_info','Нүүр хуудасны мэдээлэл:') !!}
            {!! Form::text('home_info', Cache::get('settings_home_info', ''), ['size' => '30x5','class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('slide_number','Нүүр хуудасны слайдны тоог оруулах:') !!}
            {!! Form::text('slide_number', Cache::get('settings_slide_number'), ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Хадгалах', ['class'=>'btn btn-primary ']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div class="space"></div>
@stop