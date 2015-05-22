@extends('app')

@section('content')
	<div class="page-header">
        <h2>Нийтлэлүүд</h2>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>Гарчиг</th>
            <th>оруулах хугацаа</th>
            <th>Гарчиг</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->category_id }}</td>
                <td>{{ $article->title }}</td>
                <!-- <td>{{ str_limit($article->content, 43) }}</td> -->
                <td>{{ $article->published_at }}</td>
                <td>{{ $article->thumbnail }}</td>
                <td>{!! Html::image($article->thumbnail, $article->thumbnail, array('width' => 100)) !!}</td>
                <td><a class="btn btn-warning" href="{{ url('articles/'. $article->id. '/edit', '') }}" role="button">Засах</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop