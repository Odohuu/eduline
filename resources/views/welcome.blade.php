@extends('app2')
@section('welcome')
<div class="main-slide">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7 slide-with">
                <div class="swiper-container">
                    @if(count($items)> 0)
                    <div class="swiper-wrapper">
                        @foreach($items as $item)
                        <div class="swiper-slide">
                            <span class="slide-date" style="">
                                <a href="{{ $item->slug }}">{{ $item->description }}</a>
                            </span>
                            <img alt="{{ $item->description }}" src="/images/slides/{{ $item->image }}">
                        </div>
                        @endforeach
                    </div>
                    @endif
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <!--<div class="swiper-button-next" ></div>
                    <div class="swiper-button-prev"></div>-->
                </div>
            </div>
            <div class="col-md-5 col-sm-5">
                <div class="main-info">
                    <div class="row header ">
                        <div class="col-md-8 col-sm-8 col-xs-8"><h5>ОНЦЛОХ ВИДЕО</h5></div>
                        <div class="col-md-4 col-sm-4 col-xs-4 text-right"><a href="https://www.youtube.com/channel/UCG05GR-wVE5E3dmmDNwKyzw" ><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a></div>
                    </div>
                    <div class="video">
                        {!! Cache::get('settings_home_video', '') !!}
                    </div>
                    <div class="word image_border">
                        {!! Cache::get('settings_home_info', '') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--@yield('content')--}}
<div class="main-div-white">
    <div class="container">
        <div class="col-md-6 col-sm-6">
            <div class="row" style="padding-right: 15px;">
                <div class="col-md-8 col-sm-8" style="padding-left: 0;">
                    <h4>ЗАР МЭДЭЭ</h4>
                </div>
                <div class="col-md-4 col-sm-4 text-right" style="padding-left: 0;">
                    <div class="tuslah-button">
                        <a href="/articles" >Дэлгэрэнгүй <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>
            <br>
            <div class="row" style="padding-right: 15px;">
                @foreach($zar_news as $new)
                <article>
                    <a href="{{ url('articles', $new->id) }}">
                        <section class="media-left" style="width:82px;">
                            <img class="thumbnail" src="{{ $new->thumbnail }}" width="100%" alt="{{ $new->name }}">
                        </section>
                        <section class="media-body">
                            <h5 class="media-heading">{!! $new->title !!}</h5>
                            <span class="date">Хугацаа: {{ $new->created_at }}</span>
                        </section>
                    </a>
                </article>
                <br>
                @endforeach
            </div>
        </div>
        <div class="col-md-6 col-sm-6" >
            <div class="row" >
                <div class="col-md-6 col-sm-6" style="padding-left: 0;">
                    <h4>СОНИРХОЛТОЙ МЭДЭЭ</h4>
                </div>
                <div class="col-md-6 col-sm-6 text-right" style="padding-left: 0;">
                    <div class="tuslah-button">
                        <a href="/categories/12" >Дэлгэрэнгүй <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                @foreach($busad_news as $new)
                <article>
                    <a href="{{ url('articles', $new->id) }}">
                        <section class="media-left" style="width:82px;">
                            <img class="thumbnail" src="{{ $new->thumbnail }}" width="100%" alt="{{ $new->name }}">
                        </section>
                        <section class="media-body">
                            <h5 class="media-heading">{!! $new->title !!}</h5>
                            <span class="date">Хугацаа: {{ $new->created_at }}</span>
                        </section>
                    </a>
                </article>
                <br>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="main-div">
    <div class="container">
        <div class="row">
            <div class="col-md-8"><h4>ФОТО ЦОМОГ</h4></div>
            <div class="col-md-4 text-right">
                <div class="tuslah-button">
                    <a href="/allAlbums" >Дэлгэрэнгүй <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        @if(count($albums)>0)
        <div class="row">
            @foreach($albums as $album)
            <div class="col-md-4 col-sm-4 col-top-bottom">
                <article>
                    <div class="row">
                        <div class="col-xs-6 col-sm-12">
                            <a class="thumbnail" href="{{ url('albums', $album->id, '') }}">
                                <img src="{{ 'images/photos/'.$album->cover_image }}" width="100%" height="100%" alt="{{ $album->name }}">
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
        </div>
        @endif
    </div>
</div>
<div class="main-div-white">
    <div class="container">
        <div class="row">
            <div class="col-md-8"><h4>ШИЛДЭГ ОЮУТАН</h4></div>
            <div class="col-md-4 text-right">
                <div class="tuslah-button">
                    <a href="/categories/5" >Дэлгэрэнгүй <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        @if(count($students)>0)
        <div class="row">
            @foreach($students as $student)
            <div class="col-md-3 col-sm-3 col-top-bottom">
                <article>
                    <div class="row">
                        <div class="col-xs-6 col-sm-12">
                            <a class="thumbnail" href="{{ url('articles', $student->id) }}">
                                <img src="{{ $student->thumbnail }}" width="100%" height="100%" alt="{{ $student->name }}">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-12">
                            <h5><a href="{{ url('articles', $student->id) }}">{!! str_limit($student->title, 50)  !!}</a></h5>
                            <span class="date">Хугацаа: {{ $student->created_at }}</span>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
<div class="main-div">
    <div class="container">
        <div class="row">
            <div class="col-md-8"><h4>СУРГУУЛИУД</h4></div>
            <div class="col-md-4 text-right">
                <div class="tuslah-button">
                    <a href="/schools" >Дэлгэрэнгүй <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        @if(count($schools)>0)
        <div class="row">
            @foreach($schools as $school)
            <div class="col-md-3 col-sm-6 col-sm-3 col-top-bottom">
                <article>
                    <div class="row">
                        <div class="col-xs-6 col-sm-12">
                            @if($school->thumbnail != ".")
                            <a class="thumbnail" href="{{ url('schools', $school->id) }}">
                                <img src="{{ $school->thumbnail }}" width="100%" height="100%" alt="{{ $school->name }}">
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
        @endif
    </div>
</div>
@include('partials.tuslah')
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
</script>
@endsection
@stop