@extends('app2')

@section('content')
<div class="container">
    <div class="page-header">
        <h3>МЭДЭЭ</h3>
    </div>
    @foreach(array_chunk($articles->all(), 3) as $row)
        <div class="row">
            @foreach($row as $article)
                <div class="col-md-4">
                    <article>
                        {!! Html::image($article->thumbnail, $article->thumbnail, array('width' => 300, 'height' => 300)) !!}
                        <h4><a href="{{ url('/articles', $article->id) }}">{!! str_limit($article->title, 55)  !!}</a></h4>
                        <span class="date">Хугацаа: {{ $article->created_at }}</span>
                    </article>
                </div>
            @endforeach
        </div>
        <hr />
    @endforeach
</div>
    <div class="space"></div>
@stop