@extends('app2')

@section('content')
	<div class="container show-left">
	    <hr />
	    <h4>{{ $article->title }}</h4>
	    <!-- <a>{{ $article->category_id }}</a> -->
	    <!-- <p class="date">{{ $article->created_at }}</p> -->
	    <article>
	        {!! $article->content !!}
	    </article>
    </div>
    <div class="space"></div>
@stop