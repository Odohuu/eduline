@extends('app2')

@section('content')
	<div class="container">
	    <hr />
        <row>
            <div class="col-md-8" style="overflow:hidden">
                <h4>{{ $article->title }}</h4>
                <!-- <a>{{ $article->category_id }}</a> -->
                <!-- <p class="date">{{ $article->created_at }}</p> -->
                <article>
                    {!! $article->content !!}
                </article>
            </div>
            <div class="col-md-4">
                <div class="row" style="padding-right: 15px;">
                    <div class="col-md-9 col-sm-9" style="padding-left: 0;">
                        <h5>ЗАР МЭДЭЭ</h5>
                    </div>
                    <div class="col-md-3 col-sm-3 text-right" style="padding-left: 0;">
                        <div class="tuslah-button">
                            <a href="/articles" ><span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
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
                                <p class="media-heading"><b>{!! $new->title !!}</b></p>
                                <span class="date">Хугацаа: {{ $new->created_at }}</span>
                            </section>
                        </a>
                    </article>
                    <br>
                    @endforeach
                </div>
                <div class="row" >
                <div class="col-md-9 col-sm-9" style="padding-left: 0;">
                    <h5>СОНИРХОЛТОЙ МЭДЭЭ</h5>
                </div>
                <div class="col-md-3 col-sm-3 text-right" style="padding-left: 0;">
                    <div class="tuslah-button">
                        <a href="/categories/12" ><span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
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
                            <p class="media-heading"><b>{!! $new->title !!}</b></p>
                            <span class="date">Хугацаа: {{ $new->created_at }}</span>
                        </section>
                    </a>
                </article>
                <br>
                @endforeach
            </div>
            </div>
        </row>
    </div>
    <div class="space"></div>
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
@stop