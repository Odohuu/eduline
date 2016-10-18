@extends('layouts.master') 
@section('home')
<div class="main-slide" id="main-slide">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <article class="main_item">
                    <a class="" href="{!! array_get($main_slide, '2') !!}">
                        <img class="main_item_title" src="{{ url('/images/sites/usa_zar.png')}}"  alt="{!! array_get($main_slide, '0') !!}">
                    <div class="main_item_img">
                        <img src="{!! array_get($main_slide, '1') !!}"  alt="#">    
                    </div>
                    <div class="main_item_info">
                        
                        <span class="main_item_dis">
                            Ажлын зар &bull; Орон сууц &bull; Зарна, Авна, Солино  &bull; Хайлт
                        </span>
                    </div>
                    </a>
                </article>
            </div>
            <div class="col-md-6 col-sm-6">
                <article class="main_item">
                    <a class="" href="{!! array_get($main_slide, '5') !!}">
                        <img class="main_item_title" src="{{ url('/images/sites/korea_zar.png')}}"  alt="{!! array_get($main_slide, '3') !!}">
                    <div class="main_item_img">
                        <img src="{!! array_get($main_slide, '4') !!}"  alt="#">
                    </div>
                    <div class="main_item_info">
                        
                        <span class="main_item_dis">
                            Зар сурталчилгаа &bull; Онгоцны билет &bull; Тусламж &bull; Сургалт &bull; SMS
                        </span>
                    </div>
                    </a>
                </article>
            </div>
        </div>
    </div>
</div>
    
</div>
{{--@yield('content')--}}
<div class="main-div-white">
    <div class="container">
        <div class="cd-main-content">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="heading">
                        <h4>Сонирхолтой мэдээ</h4>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    
                    <div class="tuslah-button">
                    <a href="/category/12" >Дэлгэрэнгүй <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                <div class="large-12 columns">
                    <div class="row">
                        @foreach($busad_news as $article)
                        <!-- <div class="col-md-3"> -->
                            <article class="item_1 col-md-3 col-sm-3">
                                <div class="item_1_img">
                                    <a class="" href="{{ url('news', $article->id) }}">
                                            <img src="{{ $article->thumbnail }}"  alt="{{ $article->thumbnail }}">
                                            </a>
                                </div>
                                <div class="item_1_info">
                                        <a class="" href="{{ url('news', $article->id) }}">{!! str_limit($article->title, 55)  !!}</a>
                                    <span>{!! str_limit($article->info, 120)  !!}</span>
                                </div>
                            </article>
                            <!-- </div> -->
                        @endforeach 
                    </div>
                </div>
                </div>
            </div>
        </div>
        @if(count($zar_news)>0)
        <div class="row">
            
        </div>
        @endif
    </div>
    <div class="container"><div class="bottom_line"></div></div>
    <div class="container">
        <div class="cd-main-content">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="heading">
                        <h4>Онцлох мэдээ</h4>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    
                    <div class="tuslah-button">
                    <a href="/category/1" >Дэлгэрэнгүй <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                <div class="large-12 columns">
                    <div class="row">
                        @foreach($zar_news as $article)
                        <!-- <div class="col-md-3"> -->
                            <article class="item_1 col-md-3 col-sm-3">
                                <div class="item_1_img">
                                    <a class="" href="{{ url('news', $article->id) }}">
                                            <img src="{{ $article->thumbnail }}"  alt="{{ $article->thumbnail }}">
                                            </a>
                                </div>
                                <div class="item_1_info">
                                        <a class="" href="{{ url('news', $article->id) }}">{!! str_limit($article->title, 55)  !!}</a>
                                    <span>{!! str_limit($article->info, 120)  !!}</span>
                                </div>
                            </article>
                            <!-- </div> -->
                        @endforeach 
                    </div>
                </div>
                </div>
            </div>
        </div>
        @if(count($zar_news)>0)
        <div class="row">
            
        </div>
        @endif
    </div>
</div>
<div class="main-div-white">
    <div class="container">
        
        <div class="heading">
            <h4>Шилдэг оюутан</h4>
        </div>
        <div class="large-12 columns">
        <div class="row">
                @foreach($students as $article)
                    <div class="item_1 col-md-3 col-sm-3">
                        <div class="item_1_img">
                            <a href="{{ url('news', $article->id) }}">
                                <img src="{{ $article->thumbnail }}" width="255" height="255" alt="{{ $article->name }}">
                            </a>
                        </div>
                        <div class="item_1_info">
                            <a class="" href="{{ url('news', $article->id) }}">{!! str_limit($article->title, 50)  !!}</a>
                        </div>
                         <i><span>{!! str_limit($article->info, 100) !!}</span></i>
                    </div>
                @endforeach
        </div>
        </div>
    </div>
</div>
<div class="main-div">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="heading">
                    <h4>ФОТО ЦОМОГ</h4>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 text-right">
                <div class="tuslah-button">
                    <a href="/galleries">Дэлгэрэнгүй <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <div class="row items">
            @foreach($albums as $album)
            <article class="col-md-3 col-sm-6 col-xs-6">
                <a class="thumbnail" href="{{ url('album', $album->id, '') }}">
                        <img src="{{ 'images/photos/'.$album->cover_image }}" width="100%" height="100%" alt="{{ $album->name }}">
                    </a>
                <div class="item_2_title">
                    <a href="{{ url('album', $album->id) }}">{!! str_limit($album->name, 55)  !!}</a>
                    <br />
                    <i>Хугацаа: {{ $album->created_at }}</i>
                </div>

            </article>
            @endforeach
        </div>
    </div>
    <br/>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="heading">
                    <h4>СУРГУУЛИУД</h4>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                <div class="tuslah-button">
                    <a href="/allschools">Дэлгэрэнгүй <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <div class="items row">
            @foreach($schools as $school)
            <article class="col-md-3 col-sm-6 col-xs-6">
                @if($school->thumbnail != ".")
                <a class="thumbnail" href="{{ url('school', $school->id) }}">
                        <img src="{{ $school->thumbnail }}" width="100%" height="100%" alt="{{ $school->name }}">
                    </a> @endif
                <div class="item_2_title">
                    <a href="{{ url('school', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</div>
<div class="main-div-white">
    <div class="container">
        @include('partials.tuslah')
    </div>
</div>

<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:4,
        loop:true,
        margin:10,
        dots:false,
        nav:true,
        navText:["<span class='glyphicon glyphicon-menu-left' aria-hidden='true'></span>",
                "<span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span>"],
        responsive: {
          1140: {
            items: 4
          },
          2280: {
            items: 8
          }
        }
        // autoplay:true,
        // autoplayTimeout:3000,
        // autoplayHoverPause:true
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
    var owl3 = $('.owl-carousel-3');
    owl3.owlCarousel({
        items:4,
        loop:true,
        margin:10,
        dots:false,
        nav:true,
        navText:["<span class='glyphicon glyphicon-menu-left' aria-hidden='true'></span>",
                "<span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span>"],
        responsive: {
          1140: {
            items: 4
          },
          2280: {
            items: 8
          }
        }
    });
</script>
@endsection