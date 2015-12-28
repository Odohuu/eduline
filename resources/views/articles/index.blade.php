@extends('app2')
@section('content')
<div class="container">
    <div class="page-header">
        <h3>МЭДЭЭ</h3>
    </div>
    @foreach(array_chunk($articles->all(), 4) as $row)
    <div class="row">
        @foreach($row as $article)
        <div class="col-md-3">
            <article>
                <a class="thumbnail" href="{{ url('/articles', $article->id) }}">
                    {!! Html::image($article->thumbnail, $article->thumbnail, array('width' => 217, 'height' => 217)) !!}
                </a>
                <h5><a href="{{ url('/articles', $article->id) }}">{!! str_limit($article->title, 65)  !!}</a></h5>
                <span class="date">Хугацаа: {{ $article->created_at }}</span>
            </article>
        </div>
        @endforeach
    </div>
    <hr />
    @endforeach
</div>
<br><br>
@stop