@extends('app')

@section('content')
	<div class="container">
	    <h1>Шинээр Улс оруулах</h1>
	    <hr/>

	    {!! Form::model($country = new \App\Country,['url' => 'countries']) !!}
	        @include('countries.form', ['submitButtonText' => 'Сургууль үүсгэх'])
	    {!! Form::close() !!}

	    @include('errors.list')
	</div>
@stop