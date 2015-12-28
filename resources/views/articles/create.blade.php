@extends('app')
@section('content')
<h3>Шинээр нийтлэл оруулах </h3>
{!! Form::model($article = new \App\Article,['url' => 'articles']) !!}
@include('articles.form', ['submitButtonText' => 'Ангилал үүсгэх'])
{!! Form::close() !!}
@include('errors.list')
@stop