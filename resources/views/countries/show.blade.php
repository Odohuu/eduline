@extends('layouts.master')
@section('school')
<div class="country_bg" style=" background:url('{{ $country->banner }}') no-repeat center top;">
<div class="container ">
    <br>
    <div class="row">
        <div class="tetegleg_menu">
        <div class="col-md-4">
            <div class="box box-1">
                <a href="/tetgeleg/{{ isset($tetgeleg_hb->id) ? $tetgeleg_hb->id : '#' }}">
                <i class="box_icon_1"></i>
                <span>Хэлний бэлтгэл</span>
                </a>
            </div>
        </div>
        <div class="col-md-4">
        <div class="box box-2">
            <a href="/tetgeleg/{{ isset($tetgeleg_b->id) ? $tetgeleg_b->id : '#' }}">
                <i class="box_icon_2"></i>
                <span>Бакалаврын тэтгэлэг</span>
            </a>
        </div>
        </div>
        <div class="col-md-4">
        <div class="box box-3">
            <a href="/tetgeleg/{{ isset($tetgeleg_m->id) ? $tetgeleg_m->id : '#' }}">
            <i class="box_icon_3"></i>
            <span>Доктор, Магистрын тэтгэлэг</span>
            </a>
        </div>
        </div>
        </div>
    </div>
    <!-- @include('partials.tetegleg_menu') -->
</div>
</div>
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
    <div class="items">
        @foreach(array_chunk($articles->all(), 4) as $row)
            <div class="row">
            @foreach($row as $article)
                <div class="col-md-3">
                    <article class="item">
                        @if($article->thumbnail != ".")
                        <a class="thumbnail" href="{{ url('news', $article->id) }}">
                            <img src="{{ url($article->thumbnail) }}" width="100%" height="100%" alt="{{ $article->name }}">
                        </a>
                        @endif
                        <div class="item_2_title">
                            <a href="{{ url('news', $article->id) }}">{!! str_limit($article->title, 55)  !!}</a>
                        </div>
                    </article>
                </div>
            @endforeach
            </div>
        @endforeach.
    </div>
</div>

<div class="container">
    <div class="page-header">
        <h4>ЗАР МЭДЭЭ</h4>
    </div>
    <div class="items">
        <div class="row">
            @foreach($article_zar as $article)
            <div class="col-md-3 col-sm-3">
                <article class="item ">
                    <div class="item_img">
                        <a class="" href="{{ url('news', $article->id) }}">
                                <img src="{{ $article->thumbnail }}"  alt="{{ $article->thumbnail }}">
                                </a>
                    </div>
                    <div class="item_info">
                            <a class="" href="{{ url('news', $article->id) }}">{!! str_limit($article->title, 55)  !!}</a>
                        <span>{!! str_limit($article->info, 120)  !!}</span>
                    </div>
                </article>
            </div>
            @endforeach 
        </div>
    </div>
 </div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="heading">
                <h4>ФОТО ЦОМОГ</h4>
            </div>
        </div>
        <div class="col-md-6 text-right">
            <div class="tuslah-button">
                <a href="/galleries">Дэлгэрэнгүй <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
    @if(count($albums)>0)
    <div class="row">
        <div class="container">
            <div class="items">
            <div class="row">
                @foreach($albums as $album)
                <div class="col-md-3 col-sm-3">
                <article class="item_2">
                    <a class="thumbnail" href="{{ url('album', $album->id, '') }}">
                            <img src="{{ 'http://edulinellc.mn/images/photos/'. $album->cover_image }}" width="100%" height="100%" alt="{{ $album->name }}">
                        </a>
                    <div class="item_2_title">
                        <a href="{{ url('album', $album->id) }}">{!! str_limit($album->name, 55)  !!}</a>
                        <br />
                        <i>Хугацаа: {{ $album->created_at }}</i>
                    </div>

                </article>
                </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>
    @endif
</div>

<div class="main-div">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="heading">
                <h4>СУРГУУЛИУД</h4>
            </div>
        </div>
        <div class="col-md-6 text-right">
            <div class="tuslah-button">
                <a href="/allschools">Дэлгэрэнгүй <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
    @if(count($schools)>0)
    <div class="row">
        <div class="container">
            <div class="items">
                @foreach(array_chunk($schools->all(), 4) as $row)
                    <div class="row">
                    @foreach($row as $school)
                        <article class="col-md-3 col-sm-6 col-xs-6">
                            @if($school->thumbnail != ".")
                            <a class="thumbnail" href="{{ url('school', $school->id) }}">
                                    <img src="{{ $school->thumbnail }}" width="100%" height="100%" alt="{{ $school->name }}">
                                </a> @endif
                            <div class="items_2_title">
                                <h5 class="text-center"><a href="{{ url('school', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a></h5>
                            </div>
                        </article>
                    @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
</div>
<div>
    <div class="container">
    @if ($country->id == "1")
            @include('partials.usa_map')
        @elseif ($country->id == "2")
                @include('partials.korea_map')
            @elseif ($country->id == "3")
                    @include('partials.australia_map')
                @elseif ($country->id == "4")
                        @include('partials.canada_map')
                    @elseif ($country->id == "5")
                            @include('partials.japan_map')
                        @elseif ($country->id == "7")
                            @include('partials.philippine_map')
    @endif
    </div>
</div>
<div class="space"></div>
@stop