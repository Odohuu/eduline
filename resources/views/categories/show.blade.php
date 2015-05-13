@extends('app2')

@section('content')
    <div class="page-header">
        <h3>НИЙТ ШИЛДЭГ ОЮУТАН</h3>
    </div>
    @foreach(array_chunk($articles->all(),3) as $row)
        <div class="row content-space">
            @foreach($row as $article)
                <div class="col-md-4">
                    <article>
                        {!! Html::image($article->thumbnail, '',array('id' => 'thumb')) !!}
                        <h4><a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a></h4>
                        <footer><cite title="Source Title">Хугацаа: {{ $article->created_at }}</cite></footer>
                        {{--            <div class="body">{{ $article->content }}</div>--}}
                    </article>
                </div>
            @endforeach
        </div>
    @endforeach
@stop