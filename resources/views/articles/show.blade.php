@extends('app2')

@section('content')
    <div class="page-header">
        <h2>{{ $article->title }}</h2>
    </div>
    <div></div>
    <a>{{ $article->category_id }}</a>
    <p>{{ $article->created_at }}</p>
    <article>
        <p>{!! $article->content !!}</p>
    </article>

    {{--@unless($articles->tags->isEmpty())--}}
        {{--<h5>Ангилал:</h5>--}}
        {{--<ul>--}}
            {{--@foreach($articles->tags as $tag)--}}
                {{--<li>{{ $tag->name }}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--@endunless--}}
    <br />
    <br />
    <br />
    <hr />
@stop