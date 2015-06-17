@extends('app2')

@section('content')
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
        <hr />
    @endforeach
</div>
@stop