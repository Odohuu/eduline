@extends('layouts.master')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
    <div class="page-header">
        <h4>{{ $Category->name }}</h4>
    </div>
    </div>
</div>
<!-- @foreach(array_chunk($articles->all(), 4) as $row) -->
<div class="row items">
    @foreach($row as $article)
    <div class="col-md-3 col-ms-3">
        <article class="item">
            <div class="item_img">
                <a class="" href="{{ url('news', $article->id) }}">
                        <img src="{{ $article->thumbnail }}"  alt="{{ $article->thumbnail }}">
                        </a>
            </div>
            <div class="item_info">
                    <a class="" href="{{ url('news', $article->id) }}">{!! str_limit($article->title, 55)  !!}</a>
                <span>{!! str_limit($article->info, 120)  !!}</span>
            </div>
        </article>
    </div>
    @endforeach
</div>
<!-- @endforeach -->
<?php echo $articles->render(); ?>
</div>
    <div class="space"></div>
@stop