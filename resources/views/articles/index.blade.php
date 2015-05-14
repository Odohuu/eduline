@extends('app2')

@section('content')
	<div class="page-header">
        <h1>Мэдээ</h1>
    </div>
    @foreach($articles as $article)
        <article>
            <h2><a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a></h2>
            <p>{{ $article->created_at }}</p>
            <div class="body">{{ $article->content }}</div>
        </article>
    @endforeach
@stop