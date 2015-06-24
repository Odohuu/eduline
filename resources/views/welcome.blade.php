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
                            	<a href="{{ url('/articles', $new->id) }}">
                                {!! Html::image($new->thumbnail, $new->thumbnail, array('width' => 300, 'height' => 300)) !!}
                                </a>
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
                    <div class="col-md-8"><h4>СУРГУУЛИУД</h4></div>
                    <div class="col-md-4 text-right"><a href="/schools" ><span class="glyphicon glyphicon-th" aria-hidden="true"></span></a></div>
                </div>
                @if(count($schools)>0)
                    <div class="row">
                        @foreach($schools as $school)
                            <div class="col-md-4 position">
                                
	                            @if($school->thumbnail != ".")
                            		<a href="{{ url('/schools', $school->id) }}">
                                    	{!! Html::image($school->thumbnail, $school->thumbnail, array('width' => 300, 'height' => 300)) !!}
                                    	</a>
                                    @endif
                                    <h4 class="text-center"><a href="{{ url('/schools', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a></h4>
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
                    <div class="col-md-4 text-right"><a href="/categories/5" ><span class="glyphicon glyphicon-th" aria-hidden="true"></span></a></div>
                </div>
                @if(count($students)>0)
                    <div class="row">
                        @foreach($students as $student)
                            <div class="col-md-4">
                            		<a href="{{ url('/articles', $student->id) }}">
                                    	{!! Html::image($student->thumbnail, $student->thumbnail, array('width' => 300, 'height' => 300)) !!}
                                    	</a>
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
                            		<a href="{{ url('/articles', $video->id) }}">
                                    	{!! Html::image($video->thumbnail, $video->thumbnail, array('width' => 300, 'height' => 300)) !!}
                                    	</a>
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