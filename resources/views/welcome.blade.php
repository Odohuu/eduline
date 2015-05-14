@extends('app2')
@section('welcome')

    @include('pages.slides')
        {{--@yield('content')--}}
    <div class="main-div-white">
        <div class="container">
            <div class="row headerspace">
                <div class="col-md-8"><h3>Шинэ мэдээ</h3></div>
                <div class="col-md-4 text-right"><a href="/articles" >Нийт мэдээ</a></div>
            </div>
            @if(count($news)>0)
                <div class="row">
                    @foreach($news as $new)
                        <div class="col-md-4">
                            <article>
                                <img src="" width="293" height="220" class=""/>
                                <h4><a href="{{ url('/articles', $new->id) }}">{{ $new->title }}</a></h4>
                                <span>Бичсэн: {!! $new->user->name !!}</span><br>
                                <span class="bg">Хугацаа: {{ $new->created_at }}</span><br>
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
                <div class="row headerspace">
                    <div class="col-md-8"><h3>Фото цомог</h3></div>
                    <div class="col-md-4 text-right"><a href="#" >Нийт фото</a></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <article>
                            <img src="" width="455" height="325" class=""/>
                            <h4><a href="#">123</a></h4>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article>
                            <img src="" width="455" height="325" class=""/>
                            <h4><a href="#">123</a></h4>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-div-white">
            <div class="container">
                <div class="row headerspace">
                    <div class="col-md-8"><h3>Шилдэг Оюутан</h3></div>
                    <div class="col-md-4 text-right"><a href="#" >Нийт мэдээ</a></div>
                </div>
                @if(count($students)>0)
                    <div class="row">
                        @foreach($students as $student)
                            <div class="col-md-4">
                                <article>
                                    <img src="" width="293" height="220" class=""/>
                                    <h4><a href="{{ url('/articles', $student->id) }}">{{ $student->title }}</a></h4>
                                    <span>Бичсэн: {!! $student->user->name !!}</span><br>
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
                <div class="row headerspace">
                    <div class="col-md-8"><h3>Видео</h3></div>
                    <div class="col-md-4 text-right"><a href="#" >Нийт видео</a></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <article>
                            <h4><a href="#">123</a></h4>
                            <iframe width="455" height="260" src="//www.youtube.com/embed/z8JoRkBczUM" frameborder="0" allowfullscreen=""></iframe>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article>
                            <h4><a href="#">123</a></h4>
                            <iframe width="455" height="260" src="//www.youtube.com/embed/uYfXT4VEXq8" frameborder="0" allowfullscreen=""></iframe>
                        </article>
                    </div>
                </div>
            </div>
        </div>

@endsection
@stop
