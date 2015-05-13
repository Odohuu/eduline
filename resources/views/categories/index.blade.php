@extends('app')

@section('content')
	<h1>Ангилал</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>title</th>
        </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td><a class="btn btn-warning" href="{{ url('categories/'. $category->id. '/edit', '') }}" role="button">Засах</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop