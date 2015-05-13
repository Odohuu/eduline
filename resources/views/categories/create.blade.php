@extends('app')

@section('content')

    <h1>Шинээр нийтлэл оруулах</h1>
    <hr/>

    {!! Form::open(['url' => 'categories']) !!}
        @include('categories.form', ['submitButtonText' => 'Ангилал үүсгэх'])
    {!! Form::close() !!}

    @include('errors.list')
@stop