@extends('app2')
@section('welcome')

    @include('pages.slides')
        {{--@yield('content')--}}
    <div class="main-div-white">
        <div class="container">
            <div class="row ">
                <div class="col-md-8"><h4>ШИНЭ МЭДЭЭ</h4></div>
                <div class="col-md-4 text-right"><a href="/articles" ><span class="glyphicon glyphicon-th" aria-hidden="true"></span></a></div>
            </div>
            @if(count($news)>0)
                <div class="row">
                    @foreach($news as $new)
                        <div class="col-md-4">
                            <article>
                                {!! Html::image($new->thumbnail, $new->thumbnail, array('width' => 300, 'height' => 300)) !!}
                                <h4><a href="{{ url('/articles', $new->id) }}">{!! str_limit($new->title, 55)  !!}</a></h4>
                                <span class="date">Хугацаа: {{ $new->created_at }}</span>
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
                <div class="row">
                    <div class="col-md-8"><h4>ШИЛДЭГ ОЮУТАН</h4></div>
                    <div class="col-md-4 text-right"><a href="/categories/5" ><span class="glyphicon glyphicon-th" aria-hidden="true"></span></a></div>
                </div>
                @if(count($students)>0)
                    <div class="row">
                        @foreach($students as $student)
                            <div class="col-md-4">
                                    {!! Html::image($student->thumbnail, $student->thumbnail, array('width' => 300, 'height' => 300)) !!}
                                    <h4><a href="{{ url('/articles', $student->id) }}">{!! str_limit($student->title, 55)  !!}</a></h4>
                                    <span class="date">Хугацаа: {{ $student->created_at }}</span>
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
                    <div class="col-md-8"><h4>ВИДЕО СУРТАЛЧИЛГАА</h4></div>
                    <div class="col-md-4 text-right"><a href="/categories/6" ><span class="glyphicon glyphicon-th" aria-hidden="true"></span></a></div>
                </div>
                @if(count($videos)>0)
                    <div class="row">
                        @foreach($videos as $video)
                            <div class="col-md-4">
                                    {!! Html::image($video->thumbnail, $video->thumbnail, array('width' => 300, 'height' => 300)) !!}
                                    <h4><a href="{{ url('/articles', $video->id) }}">{!! str_limit($video->title, 55)  !!}</a></h4>
                                    <span class="date">Хугацаа: {{ $video->created_at }}</span>
                                </article>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        @include('pages.tuslah')
@endsection
@stop
