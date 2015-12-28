@extends('app2')

@section('content')
<div class="container">
    <div class="page-header">
        <h3>{{ $Category->name }}</h3>
    </div>
    @foreach(array_chunk($articles->all(), 4) as $row)
	    <div class="row">
	        @foreach($row as $article)
                <div class="col-md-3 col-sm-3 col-top-bottom">
                    <article>
                        <div class="row">
                                <div class="col-xs-6 col-sm-12">
                                    <a class="thumbnail" href="{{ url('articles', $article->id) }}">
                                        <img src="{{ url($article->thumbnail) }}" width="100%" height="100%" alt="{{ $article->name }}">
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-12">
                                    <h5> <a class="" href="{{ url('articles', $article->id) }}">{!! str_limit($article->title, 45)  !!}</a></h5>
                                    <span class="date">Хугацаа: {{ $article->created_at }}</span>
                                </div>
                            </div>
                    </article>
                </div>
	        @endforeach
	    </div>
	    <br />
    @endforeach
</div>
    <div class="space"></div>
@stop