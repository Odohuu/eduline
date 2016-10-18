@extends('layouts.master')
@section('home')
<br />
<div class="container">
    <div class="col-md-6 english_lesson">
        <div class="row">
            <div class="col-md-8"><h4>АНГЛИ ХЭЛНИЙ ХИЧЭЭЛ</h4></div>
            <div class="col-md-4 text-right">
                <div class="tuslah-button">
                    <a href="/category/14" >Дэлгэрэнгүй <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <br />
        <div class="items">
        @foreach($english_lesson_news as $article)
            <article class="item item_two">
                <div class="item_img">
                    <a href="{{ url('news', $article->id) }}">
                        <img src="{{ $article->thumbnail }}"  alt="{{ $article->thumbnail }}">
                    </a>
                </div>
                <div class="item_info">
                    <div class="item_info_title">
                        <a href="{{ url('news', $article->id) }}">{!! str_limit($article->title, 50)  !!}</a>
                    </div>
                    <i>Хугацаа: {{ $article->created_at }}</i>
                </div>
            </article>
        @endforeach
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-8"><h4>СОЛОНГОС ХЭЛНИЙ ХИЧЭЭЛ</h4></div>
            <div class="col-md-4 text-right">
                <div class="tuslah-button">
                    <a href="/category/16" >Дэлгэрэнгүй <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <br />
        <div class="items">
        @foreach($korea_lesson_news as $article)
            <article class="item item_two">
                <div class="item_img">
                    <a href="{{ url('news', $article->id) }}">
                        <img src="{{ $article->thumbnail }}"  alt="{{ $article->thumbnail }}">
                    </a>
                </div>
                <div class="item_info">
                    <div class="item_info_title">
                        <a class="" href="{{ url('news', $article->id) }}">{!! str_limit($article->title, 50)  !!}</a>
                    </div>
                    <i>Хугацаа: {{ $article->created_at }}</i>
                </div>
            </article>
        @endforeach
        </div>
    </div>
</div>
<br />
<div class="main-slide">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="owl-carousel owl-carousel-1">
                    @foreach($english_albums as $item1)
                    <div>
                        <img alt="{{ $item1->name }}" src="/images/articles/{{ $item1->path }}">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="owl-carousel owl-carousel-2">
                    @foreach($korea_albums as $item2)
                    <div>
                        <img alt="{{ $item2->name }}" src="/images/articles/{{ $item2->path }}">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<div class="main-div-white">
    <div class="container">
        @include('partials.tuslah')
    </div>
</div>
<script>
    var owl1 = $('.owl-carousel-1');
    owl1.owlCarousel({
        items:1,
        loop:true,
        margin:30,
        autoplay:true,
        // autoplayTimeout:5000,
        autoplayHoverPause:true
    });
    var owl2 = $('.owl-carousel-2');
    owl2.owlCarousel({
        items:1,
        loop:true,
        margin:30,
        autoplay:true,
        // autoplayTimeout:5000,
        autoplayHoverPause:true
    });
</script>
@endsection