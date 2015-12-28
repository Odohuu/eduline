@extends('app2')
@section('content')
<div class="container">
    <div class="page-header">
        <h3>Америкийн Нэгдсэн Улс</h3>
    </div>
    @foreach(array_chunk($usa_schools->all(), 4) as $row)
    <div class="row">
        @foreach($row as $school)
        <article class="col-md-3 col-sm-3 col-top-bottom ">
                    <div class="row">
                        <section class="col-xs-6 col-sm-12 position">
                            <img class="flag_position" src="{{ url($usa_schools_flag->flag) }}" width="16%" alt="{{ $usa_schools_flag->name }}">
                            <a class="thumbnail" href="{{ url('schools/'. $school->id, '') }}">
                                <img src="{{ url($school->thumbnail) }}" width="100%" height="100%" alt="{{ $school->name }}">
                            </a>
                        </section>
                        <section class="col-xs-6 col-sm-12">
                            <h5><a href="{{ url('schools', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a></h5>
                            <span class="date"><center>Хугацаа: {{ $school->created_at }}</center></span>
                        </section>
                    </div>
        </article>
        @endforeach
    </div>
    <br>
    @endforeach
    <div class="page-header">
        <h3>Солонгос Улс</h3>
    </div>
    @foreach(array_chunk($korea_schools->all(), 4) as $row)
    <div class="row">
        @foreach($row as $school)
        <article class="col-md-3 col-sm-3 col-top-bottom ">
                    <div class="row">
                        <section class="col-xs-6 col-sm-12 position">
                            <img class="flag_position" src="{{ url($korea_schools_flag->flag) }}" width="16%" alt="{{ $korea_schools_flag->name }}">
                            <a class="thumbnail" href="{{ url('schools/'. $school->id, '') }}">
                                <img src="{{ url($school->thumbnail) }}" width="100%" height="100%" alt="{{ $school->name }}">
                            </a>
                        </section>
                        <section class="col-xs-6 col-sm-12">
                            <h5><a href="{{ url('schools', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a></h5>
                            <span class="date"><center>Хугацаа: {{ $school->created_at }}</center></span>
                        </section>
                    </div>
        </article>
        @endforeach
    </div>
    <br>
    @endforeach
    <div class="page-header">
        <h3>Австрали Улс</h3>
    </div>
    @foreach(array_chunk($australia_schools->all(), 4) as $row)
    <div class="row">
        @foreach($row as $school)
        <article class="col-md-3 col-sm-3 col-top-bottom ">
                    <div class="row">
                        <section class="col-xs-6 col-sm-12 position">
                            <img class="flag_position" src="{{ url($australia_schools_flag->flag) }}" width="16%" alt="{{ $australia_schools_flag->name }}">
                            <a class="thumbnail" href="{{ url('schools/'. $school->id, '') }}">
                                <img src="{{ url($school->thumbnail) }}" width="100%" height="100%" alt="{{ $school->name }}">
                            </a>
                        </section>
                        <section class="col-xs-6 col-sm-12">
                            <h5><a href="{{ url('schools', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a></h5>
                            <span class="date"><center>Хугацаа: {{ $school->created_at }}</center></span>
                        </section>
                    </div>
        </article>
        @endforeach
    </div>
    <br>
    @endforeach
    <div class="page-header">
        <h3>Канад Улс</h3>
    </div>
    @foreach(array_chunk($canada_schools->all(), 4) as $row)
    <div class="row">
        @foreach($row as $school)
        <article class="col-md-3 col-sm-3 col-top-bottom ">
                    <div class="row">
                        <section class="col-xs-6 col-sm-12 position">
                            <img class="flag_position" src="{{ url($canada_schools_flag->flag) }}" width="16%" alt="{{ $canada_schools_flag->name }}">
                            <a class="thumbnail" href="{{ url('schools/'. $school->id, '') }}">
                                <img src="{{ url($school->thumbnail) }}" width="100%" height="100%" alt="{{ $school->name }}">
                            </a>
                        </section>
                        <section class="col-xs-6 col-sm-12">
                            <h5><a href="{{ url('schools', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a></h5>
                            <span class="date"><center>Хугацаа: {{ $school->created_at }}</center></span>
                        </section>
                    </div>
        </article>
        @endforeach
    </div>
    <br>
    @endforeach
    <div class="page-header">
        <h3>Япон Улс</h3>
    </div>
    @foreach(array_chunk($japan_schools->all(), 4) as $row)
    <div class="row">
        @foreach($row as $school)
        <article class="col-md-3 col-sm-3 col-top-bottom ">
                    <div class="row">
                        <section class="col-xs-6 col-sm-12 position">
                            <img class="flag_position" src="{{ url($japan_schools_flag->flag) }}" width="16%" alt="{{ $japan_schools_flag->name }}">
                            <a class="thumbnail" href="{{ url('schools/'. $school->id, '') }}">
                                <img src="{{ url($school->thumbnail) }}" width="100%" height="100%" alt="{{ $school->name }}">
                            </a>
                        </section>
                        <section class="col-xs-6 col-sm-12">
                            <h5><a href="{{ url('schools', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a></h5>
                            <span class="date"><center>Хугацаа: {{ $school->created_at }}</center></span>
                        </section>
                    </div>
        </article>
        @endforeach
    </div>
    <br>
    @endforeach
</div>
@stop