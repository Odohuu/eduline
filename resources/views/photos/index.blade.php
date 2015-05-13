@extends('app')

@section('content')
    <h1>Фото зураг</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>title</th>
        </tr>
        </thead>
        <tbody>
        @foreach($photos as $photo)
            <tr>
                <th scope="row">{{ $photo->id }}</th>
                <td style="height: 140px;">{!! Html::image($photo->path, $photo->name, array('width' => 120)) !!}</td>
                <td>{{ $photo->path }}</td>
                <td>{{ $photo->name }}</td>
                <td><a class="btn btn-warning" href="{{ url('photos/'. $photo->id .'/edit', '') }}" role="button">Засах</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop