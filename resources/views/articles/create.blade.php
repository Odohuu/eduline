@extends('app')

@section('content')

    <h4>Шинээр нийтлэл оруулах</h4>
    <hr/>

    {!! Form::model($article = new \App\Article,['url' => 'articles']) !!}
        @include('articles.form', ['submitButtonText' => 'Ангилал үүсгэх'])
    {!! Form::close() !!}

    @include('errors.list')
@stop