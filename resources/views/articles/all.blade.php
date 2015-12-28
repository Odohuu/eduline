@extends('app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading ">Нийтлэлүүд </div>
    <div class="panel-body">
        <div class="row text-center">
            <a class="btn btn-default" href="/articles/create">үүсгэх</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Ангилал</th>
                <th>Гарчиг</th>
                <th>Он сар</th>
                <th>Зураг</th>
                <th>Засвар</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->category_id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->published_at }}</td>
                <td>{!! Html::image($article->thumbnail, $article->thumbnail, array('width' => 100)) !!}</td>
                <td><a class="btn btn-warning" href="{{ url('articles/'. $article->id. '/edit', '') }}" role="button">Засах</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<?php echo $articles->render(); ?>
@stop