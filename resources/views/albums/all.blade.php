@extends('layouts.master')
@section('content')
<div class="container">
    <div class="page-header">
        <h4>ФОТО ЦОМГУУД</h4>
    </div>
    <div class="items">
        @foreach($albums as $album)
        <article class="item_2 item_four">
            <a class="thumbnail" href="{{ url('album', $album->id, '') }}">
                    <img src="{{ 'images/photos/'.$album->cover_image }}" width="100%" height="100%" alt="{{ $album->name }}">
                </a>
            <div class="item_2_title">
                <a href="{{ url('album', $album->id) }}">{!! str_limit($album->name, 55)  !!}</a>
                <br />
                <i>Хугацаа: {{ $album->created_at }}</i>
            </div>
        </article>
        @endforeach
    </div>
    <?php echo $albums->render(); ?>
</div>
<div class="space"></div>
@stop