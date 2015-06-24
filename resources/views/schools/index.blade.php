@extends('app2')

@section('content')
<div class="container">

	<div class="page-header">
        <h3>Америкийн Нэгдсэн Улс</h3>
    </div>
    @foreach(array_chunk($usa_schools->all(), 3) as $row)
        <div class="row">
            @foreach($row as $school)
                <div class="col-md-4">
                    <article class="position">
                        {!! Html::image($usa_schools_flag->flag, 'usa_schools_flag->name', array('width' => 50, 'class' => 'flag_position')) !!}
                    	@if($school->thumbnail != ".")
                    	<a href="{{ url('/schools', $school->id) }}">
                        {!! Html::image($school->thumbnail, $school->thumbnail, array('width' => 300, 'height' => 300, 'class' => 'image_border')) !!}
                        </a>
                        @endif
                        <h4 class="text-center"><a href="{{ url('/schools', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a></h4>
                        <center><span class="date">Хугацаа: {{ $school->created_at }}</span></center>
                    </article>
                </div>
            @endforeach
        </div>
        <hr />
    @endforeach

    <div class="page-header">
        <h3>Солонгос Улс</h3>
    </div>
    @foreach(array_chunk($korea_schools->all(), 3) as $row)
        <div class="row">
            @foreach($row as $school)
                <div class="col-md-4">
                    <article class="position">
                        {!! Html::image($korea_schools_flag->flag, 'korea_schools_flag->name', array('width' => 50, 'class' => 'flag_position')) !!}
                        @if($school->thumbnail != ".")
                        <a href="{{ url('/schools', $school->id) }}">
                        {!! Html::image($school->thumbnail, $school->thumbnail, array('width' => 300, 'height' => 300, 'class' => 'image_border')) !!}
                        </a>
                        @endif
                        <h4 class="text-center"><a href="{{ url('/schools', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a></h4>
                        <center><span class="date">Хугацаа: {{ $school->created_at }}</span></center>
                    </article>
                </div>
            @endforeach
        </div>
        <hr />
    @endforeach
    <div class="page-header">
        <h3>Австрали Улс</h3>
    </div>
    @foreach(array_chunk($australia_schools->all(), 3) as $row)
        <div class="row">
            @foreach($row as $school)
                <div class="col-md-4">
                    <article class="position">
                        {!! Html::image($australia_schools_flag->flag, 'australia_schools_flag->name', array('width' => 50, 'class' => 'flag_position')) !!}
                        @if($school->thumbnail != ".")
                        <a href="{{ url('/schools', $school->id) }}">
                        {!! Html::image($school->thumbnail, $school->thumbnail, array('width' => 300, 'height' => 300, 'class' => 'image_border')) !!}
                        </a>
                        @endif
                        <h4 class="text-center"><a href="{{ url('/schools', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a></h4>
                        <center><span class="date">Хугацаа: {{ $school->created_at }}</span></center>
                    </article>
                </div>
            @endforeach
        </div>
        <hr />
    @endforeach
    <div class="page-header">
        <h3>Канад Улс</h3>
    </div>
    @foreach(array_chunk($canada_schools->all(), 3) as $row)
        <div class="row">
            @foreach($row as $school)
                <div class="col-md-4">
                    <article class="position">
                        {!! Html::image($canada_schools_flag->flag, 'canada_schools_flag->name', array('width' => 50, 'class' => 'flag_position')) !!}
                        @if($school->thumbnail != ".")
                        <a href="{{ url('/schools', $school->id) }}">
                        {!! Html::image($school->thumbnail, $school->thumbnail, array('width' => 300, 'height' => 300, 'class' => 'image_border')) !!}
                        </a>
                        @endif
                        <h4 class="text-center"><a href="{{ url('/schools', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a></h4>
                        <center><span class="date">Хугацаа: {{ $school->created_at }}</span></center>
                    </article>
                </div>
            @endforeach
        </div>
        <hr />
    @endforeach
    <div class="page-header">
        <h3>Япон Улс</h3>
    </div>
    @foreach(array_chunk($japan_schools->all(), 3) as $row)
        <div class="row">
            @foreach($row as $school)
                <div class="col-md-4">
                    <article class="position">
                        {!! Html::image($japan_schools_flag->flag, 'japan_schools_flag->name', array('width' => 50, 'class' => 'flag_position')) !!}
                        @if($school->thumbnail != ".")
                        <a href="{{ url('/schools', $school->id) }}">
                        {!! Html::image($school->thumbnail, $school->thumbnail, array('width' => 300, 'height' => 300, 'class' => 'image_border')) !!}
                        </a>
                        @endif
                        <h4 class="text-center"><a href="{{ url('/schools', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a></h4>
                        <center><span class="date">Хугацаа: {{ $school->created_at }}</span></center>
                    </article>
                </div>
            @endforeach
        </div>
        <hr />
    @endforeach
</div>

@stop