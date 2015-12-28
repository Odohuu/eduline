@extends('app2')
@section('content')
<div class="container">
    <div class="page-header">
        <h4>ФОТО ЦОМГУУД</h4>
    </div>
    @foreach(array_chunk($albums->all(), 3) as $row)
    <div class="row">
        @foreach($row as $album)
                <article class="col-md-4 col-sm-4 col-top-bottom">
                    <div class="row">
                        <section class="col-xs-6 col-sm-12">
                            <a class="thumbnail" href="{{ url('albums', $album->id, '') }}">
                                <img src="{{ 'images/photos/'.$album->cover_image }}" width="100%" height="100%" alt="{{ $album->name }}">
                            </a>
                        </section>
                        <section class="col-xs-6 col-sm-12">
                            <h5><a href="{{ url('albums', $album->id) }}">{!! str_limit($album->name, 55)  !!}</a></h5>
                            <span class="date">Хугацаа: {{ $album->created_at }}</span>
                        </section>
                    </div>
                </article>
        @endforeach
    </div>
    <br>
    @endforeach
    <?php echo $albums->render(); ?>
</div>
<div class="space"></div>
@stop