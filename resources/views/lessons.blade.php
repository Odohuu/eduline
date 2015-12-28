@extends('app2')
@section('welcome')
<div class="main-slide">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="swiper-container swiper-container-vertical-1">
                    @if(count($english_albums)> 0)
                    <div class="swiper-wrapper">
                        @foreach($english_albums as $item1)
                        <div class="swiper-slide">
                            <img alt="{{ $item1->name }}" src="/images/articles/{{ $item1->path }}" width="475">
                        </div>
                        @endforeach
                    </div>
                    @endif
                    <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-pagination-1"></div>
                    <!-- Add Arrows -->
                    <!--<div class="swiper-button-next" ></div>
                    <div class="swiper-button-prev"></div>-->
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="swiper-container swiper-container-vertical-2">
                    @if(count($korea_albums)> 0)
                    <div class="swiper-wrapper">
                        @foreach($korea_albums as $item2)
                        <div class="swiper-slide">
                            <img alt="{{ $item2->name }}" src="/images/articles/{{ $item2->path }}" width="475">
                        </div>
                        @endforeach
                    </div>
                    @endif
                    <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-pagination-2"></div>
                    <!-- Add Arrows -->
                    <!--<div class="swiper-button-next" ></div>
                    <div class="swiper-button-prev"></div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<div class="container">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-8"><h4>СОЛОНГОС ХЭЛНИЙ ХИЧЭЭЛ</h4></div>
            <div class="col-md-4 text-right">
                <div class="tuslah-button">
                    <a href="/categories/13" >Дэлгэрэнгүй <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <br />
        @if(count($korea_lesson_news)>0)
        @foreach(array_chunk($korea_lesson_news->all(), 2) as $row)
        <div class="row">
            @foreach($row as $lesson)
            <div class="col-md-6 col-sm-6 col-top-bottom">
                <article>
                    <div class="row">
                        <div class="col-xs-6 col-sm-12">
                            <a class="thumbnail" href="{{ url('articles', $lesson->id) }}">
                                <img src="{{ $lesson->thumbnail }}" width="100%" height="100%" alt="{{ $lesson->name }}">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-12">
                            <h5><a href="{{ url('articles', $lesson->id) }}">{!! str_limit($lesson->title, 50)  !!}</a></h5>
                            <span class="date">Хугацаа: {{ $lesson->created_at }}</span>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
        <br />
        @endforeach
        @endif
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-8"><h4>АНГЛИ ХЭЛНИЙ ХИЧЭЭЛ</h4></div>
            <div class="col-md-4 text-right">
                <div class="tuslah-button">
                    <a href="/categories/13" >Дэлгэрэнгүй <span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <br />
        @if(count($english_lesson_news)>0)
        @foreach(array_chunk($english_lesson_news->all(), 2) as $row)
        <div class="row">
            @foreach($row as $lesson)
            <div class="col-md-6 col-sm-6 col-top-bottom">
                <article>
                    <div class="row">
                        <div class="col-xs-6 col-sm-12">
                            <a class="thumbnail" href="{{ url('articles', $lesson->id) }}">
                                <img src="{{ $lesson->thumbnail }}" width="100%" height="100%" alt="{{ $lesson->name }}">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-12">
                            <h5><a href="{{ url('articles', $lesson->id) }}">{!! str_limit($lesson->title, 50)  !!}</a></h5>
                            <span class="date">Хугацаа: {{ $lesson->created_at }}</span>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
        <br />
        @endforeach
        @endif
    </div>
</div>
<div class="main-div-white">
</div>
<div class="main-div">
</div>
@include('partials.tuslah')
<script>
    var swiper = new Swiper('.swiper-container-vertical-1', {
        pagination: '.swiper-pagination-1',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true,
        centeredSlides: true,
        autoplay: 4000,
        autoplayDisableOnInteraction: false,
        effect: 'cube',
        grabCursor: true,
        cube: {
            shadow: true,
            slideShadows: false,
            shadowOffset: 5,
            shadowScale: 0.9
        }
    });
</script>
<script> 
var swiper = new Swiper('.swiper-container-vertical-2', {
        pagination: '.swiper-pagination-2',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true,
        centeredSlides: true,
        autoplay: 3000,
        autoplayDisableOnInteraction: false,
        effect: 'cube',
        grabCursor: true,
        cube: {
            shadow: true,
            slideShadows: false,
            shadowOffset: 5,
            shadowScale: 0.9
        }
    });
</script>
@endsection
@stop