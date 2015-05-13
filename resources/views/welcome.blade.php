@extends('app2')
@section('welcome')

    @include('pages.slides')
        {{--@yield('content')--}}
    <div class="main-div-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8"><h2><small>ШИНЭ МЭДЭЭ</small></h2></div>
                <div class="col-md-4 text-right more"><a href="/articles" >Нийт мэдээ<span class="glyphicon glyphicon-th btn-lg" aria-hidden="true"></span></a></div>
            </div>
            @if(count($news)>0)
                <div class="row">
                    @foreach($news as $new)
                        <div class="col-md-4">
                            <article>
                                {!! Html::image($new->thumbnail, '',array('id' => 'thumb')) !!}

                                <h4><a href="{{ url('/articles', $new->id) }}">{{ str_limit( $new->title, 55, '...') }}</a></h4>
                                {{--<span>Бичсэн: {!! $new->user->name !!}</span><br>--}}
                                <footer><cite title="Source Title">Хугацаа: {{ $new->created_at }}</cite></footer>
                                {{--<div class="body">{{ $articles->content }}</div>--}}
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
                    <div class="col-md-8"><h2><small>ФОТО ЦОМОГ</small></h2></div>
                    <div class="col-md-4 text-right more"><a href="#" >Нийт мэдээ<span class="glyphicon glyphicon-th btn-lg" aria-hidden="true"></span></a></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <article>
                            <img src="/images/photos/2.jpg" width="455" height="325" class=""/>
                            <h4><a href="#">Солонгос</a></h4>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article>
                            <img src="/images/photos/1.jpg" width="455" height="325" class=""/>
                            <h4><a href="#">Америк</a></h4>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-div-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-8"><h2><small>ШИЛДЭГ ОЮУТАН</small></h2></div>
                    <div class="col-md-4 text-right more"><a href="categories/5" >Нийт шилдэг оюутан<span class="glyphicon glyphicon-th btn-lg" aria-hidden="true"></span></a></div>
                </div>
                @if(count($students)>0)
                    <div class="row">
                        @foreach($students as $student)
                            <div class="col-md-4">
                                <article>
                                    {!! Html::image($student->thumbnail, '',array('id' => 'thumb')) !!}
                                    <h4><a href="{{ url('/articles', $student->id) }}">{{ $student->title }}</a></h4>
{{--                                    <span>Бичсэн: {{ $student->user->name }}</span><br>--}}
                                    <span class="bg">Хугацаа: {{ $student->created_at }}</span><br>
                                    {{--<div class="body">{{ $articles->content }}</div>--}}
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
                    <div class="col-md-8"><h2><small>ВИДЕО</small></h2></div>
                    <div class="col-md-4 text-right more"><a href="#">Нийт мэдээ<span class="glyphicon glyphicon-th btn-lg" aria-hidden="true"></span></a></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <article>
                            <h4><a href="#">INHA University</a></h4>
                            <iframe width="455" height="260" src="//www.youtube.com/embed/z8JoRkBczUM" frameborder="0" allowfullscreen=""></iframe>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article>
                            <h4><a href="#">Hanseo University</a></h4>
                            <iframe width="455" height="260" src="//www.youtube.com/embed/uYfXT4VEXq8" frameborder="0" allowfullscreen=""></iframe>
                        </article>
                    </div>
                </div>
            </div>
        </div>

@endsection
@stop
