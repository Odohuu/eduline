@extends('app2')

@section('school')
    <div style="height:230px; background:url('{{ $country->banner }}') no-repeat center top;"></div>
    <div class="container">
        <!-- <div class="page-header"> -->
            <h3>{{ $country->name }}</h3>
        <!-- </div> -->
        <hr />
        <article>
                <!-- <p>{!! $country->content !!}</p> -->
        </article>
    </div>
    <div class="container">
        @foreach(array_chunk($articles->all(), 3) as $row)
            <div class="row">
                @foreach($row as $article)
                    <div class="col-md-4">
                        <article>
                            <!-- {!! Html::image($article->thumbnail, $article->thumbnail, array('width' => 300, 'height' => 300)) !!} -->
                            <h4><a href="{{ url('/articles', $article->id) }}">{!! str_limit($article->title, 55)  !!}</a></h4>
                            <span class="date">Хугацаа: {{ $article->created_at }}</span>
                        </article>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    <div class="container">
        <div class="page-header">
            <h3>СУРГУУЛИУД</h3>
        </div>
        @foreach(array_chunk($schools->all(), 3) as $row)
            <div class="row">
                @foreach($row as $school)
                    <div class="col-md-4">
                        <article>
                        	@if($school->thumbnail != ".")
                        	<a href="{{ url('/schools', $school->id) }}">
                            	{!! Html::image($school->thumbnail, $school->thumbnail, array('width' => 300, 'height' => 300)) !!}
                            	</a>
                            	@endif
                            <h4><a href="{{ url('/schools', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a></h4>
                            <span class="date">Хугацаа: {{ $school->created_at }}</span>
                        </article>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    <div class="space"></div>

@stop