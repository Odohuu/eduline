@extends('app')

@section('content')
<div class="container">
    <div class="starter-template">
        
        <div class="row">
          @foreach($albums as $album)
            <div class="col-lg-3">
              <div class="thumbnail" style="min-height: 350px;">
                <img alt="{{$album->name}}" src="/images/photos/{{$album->cover_image}}">
                <div class="caption">
                  <h3>{{ $album->name }}</h3>
                  <p>{{ $album->description }}</p>
                  <p>{{ count($album->photos) }} image(s).</p>
                  <p>Created date:  {{ date("d F Y",strtotime($album->created_at)) }} at {{date("g:ha",strtotime($album->created_at)) }}</p>
                  <p><a href="{{ URL::route('albums.edit', array('id'=>$album->id))  }}" class="btn btn-big btn-default">edit Gallery</a></p>
                  <p><a href="{{ URL::route('albums.show', array('id'=>$album->id))  }}" class="btn btn-big btn-default">Show Gallery</a></p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
    
      </div><!-- /.container -->
</div>
    <div class="space"></div>
@stop