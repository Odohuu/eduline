@extends('app2')
@section('school')
<div style="height:230px; background:url('{{ $country->banner }}') no-repeat center top;"></div>
<div class="container">
    <!-- <div class="page-header"> -->
    <h3>{{ $country->name }}</h3>
    <!-- </div> -->
    <hr>
    <article>
        <!-- <p>{!! $country->content !!}</p> -->
    </article>
</div>
<div class="container">
    @foreach(array_chunk($articles->all(), 3) as $row)
    <div class="row">
        @foreach($row as $article)
        <div class="col-md-4 col-sm-4">
            <article>
                @if($article->thumbnail != ".")
                <a class="thumbnail" href="{{ url('/articles', $article->id) }}">
                    <img src="{{ url($article->thumbnail) }}" width="100%" height="100%" alt="{{ $article->name }}">
                </a>
                @endif
                <h5><a href="{{ url('/articles', $article->id) }}">{!! str_limit($article->title, 55)  !!}</a></h5>
                <span class="date">Хугацаа: {{ $article->created_at }}</span>
            </article>
        </div>
        @endforeach
    </div>
    <br />
    @endforeach
</div>

<div class="container">
    <div class="page-header">
        <h4>ЗАР МЭДЭЭ</h4>
    </div>
    @foreach(array_chunk($article_zar->all(), 4) as $row)
    <div class="row margin-bottom">
        @foreach($row as $zar)
        <div class="col-md-3 col-sm-6 col-sm-3 col-top-bottom">
                <article>
                     <div class="row">
                        <div class="col-xs-6 col-sm-12">
                        @if($zar->thumbnail != ".")
                        <a class="thumbnail" href="{{ url('articles', $zar->id) }}">
                            <img src="{{ url($zar->thumbnail) }}" width="100%" height="100%" alt="{{ $zar->name }}">
                        </a>
                        @endif
                        </div>
                        <div class="col-xs-6 col-sm-12">
                            <h5 class="text-center"><a href="{{ url('articles', $zar->id) }}">{!! str_limit($zar->name, 55)  !!}</a></h5>
                        </div>
                        </div>
                </article>
            </div>
        @endforeach
    </div>
    <br>
    @endforeach
 </div>
 
<div class="container">
    <div class="row page-header">
        <div class="col-md-8"><h4>ФОТО ЦОМОГ</h4></div>
        <div class="col-md-4 text-right">
            <div class="tuslah-button">
                <a href="/allAlbums" >Дэлгэрэнгүй <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
    @foreach(array_chunk($albums->all(), 3) as $row)
    <div class="row">
        @foreach($row as $album)
        <div class="col-md-4 col-sm-4 col-top-bottom">
                <article>
                    <div class="row">
                        <div class="col-xs-6 col-sm-12">
                            <a class="thumbnail" href="{{ url('albums', $album->id, '') }}">
                                <img src="{{ url('images/photos/'.$album->cover_image) }}" width="100%" height="100%" alt="{{ $album->name }}">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-12">
                            <h5><a href="{{ url('albums', $album->id) }}">{!! str_limit($album->name, 55)  !!}</a></h5>
                            <span class="date">Хугацаа: {{ $album->created_at }}</span>
                        </div>
                    </div>
                </article>
        </div>
        @endforeach
    </div><br />
    @endforeach
</div>

<div class="container">
    <div class="page-header">
        <h4>СУРГУУЛИУД</h4>
    </div>
    @foreach(array_chunk($schools->all(), 4) as $row)
    <div class="row margin-bottom">
        @foreach($row as $school)
        <div class="col-md-3 col-sm-6 col-sm-3 col-top-bottom">
                <article>
                     <div class="row">
                        <div class="col-xs-6 col-sm-12">
                        @if($school->thumbnail != ".")
                        <a class="thumbnail" href="{{ url('schools', $school->id) }}">
                            <img src="{{ url($school->thumbnail) }}" width="100%" height="100%" alt="{{ $school->name }}">
                        </a>
                        @endif
                        </div>
                        <div class="col-xs-6 col-sm-12">
                            <h5 class="text-center"><a href="{{ url('schools', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a></h5>
                        </div>
                        </div>
                </article>
            </div>
        @endforeach
    </div>
    <br>
    @endforeach
</div>
<div class="space"></div>
@stop