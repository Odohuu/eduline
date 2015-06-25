@extends('app')

@section('content')
    
    <div class="container">
    
      <div class="starter-template">
        <div class="media">
          <img class="media-object pull-left"alt="{{ $album->name }}" src="/images/photos/{{ $album->cover_image }}" width="300px">
          <div class="media-body">
            <h2>Album Name:</h2>
            <p>{{$album->name}}</p>
          <div class="media">
            <h2>AlbumDescription :</h2>
            <p>{{$album->description}}<p>
            <a href="{{ URL::route('zurag.create') }}"><button type="button"class="btn btn-primary btn-large">Add New Image to Album</button></a>
            <a href="{{ URL::route('albums.destroy', array('id'=>$album->id)) }}" onclick="return confirm('Are yousure?')"><button type="button"class="btn btn-danger btn-large">Delete Album</button></a>
        </div>
      </div>
    </div>
    </div>
      <div class="row">
        @foreach($album->photos as $photo)
          <div class="col-lg-3">
            <div class="thumbnail" style="max-height: 350px;min-height: 350px;">
              <img alt="{{$album->name}}" src="/albums/{{$photo->image}}">
              <div class="caption">
                <p>{{$photo->description}}</p>
                <p><p>Created date:  {{ date("d F Y",strtotime($photo->created_at)) }} at {{ date("g:ha",strtotime($photo->created_at)) }}</p></p>
                <a href="{{URL::route('albums.destroy',array('id'=>$photo->id))}}" onclick="return confirm('Are you sure?')"><button type="button" class="btnbtn-danger btn-small">Delete Image </button></a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    @include('errors.list')
@stop