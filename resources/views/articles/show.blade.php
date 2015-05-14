@extends('app2')

@section('content')
    <div class="page-header">
        <h1>{{ $article->title }}</h1>
    </div>
    <a>{{ $article->category_id }}</a>
    <p>{{ $article->created_at }}</p>
    <article>
        {{ $article->content }}
    </article>

    {{--@unless($articles->tags->isEmpty())--}}
        {{--<h5>Ангилал:</h5>--}}
        {{--<ul>--}}
            {{--@foreach($articles->tags as $tag)--}}
                {{--<li>{{ $tag->name }}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--@endunless--}}
@stop