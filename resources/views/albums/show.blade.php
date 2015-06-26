@extends('app2')

@section('content')
    
    <div class="container">
      <div>
      <h3>{{$album->name}}</h3>
      <p>{{$album->description}}<p>
      </div>
      <div class="owl-album" style="width:855px; overflow:hidden;">
        @foreach($album->photos as $photo)
            <div class="item">
              <img alt="{{$album->name}}" src="/images/photos/{{ $photo->path }}">
            </div>
        @endforeach
      </div>
      <div class="owl-nav">
            <div class="owl-prev">prev</div>
            <div class="owl-next">next</div>

            <a class="button secondary play" style="cursor:pointer;">Play</a>
            <a class="button secondary stop" style="cursor:pointer;">Stop</a>
      </div>
      
    </div>
    <script>
      $(document).ready(function(){
        $(".owl-album").owlCarousel({
          items:1,
          rtl:true,
          center:true,
          loop:true,
          margin:30,
          autoWidth:true,
          autoplay:true,
          autoplayTimeout:2000,
          autoplayHoverPause:true
        });
      });
      $('.play').on('click',function(){
          owl.trigger('autoplay.play.owl',[1000])
      })
      $('.stop').on('click',function(){
          owl.trigger('autoplay.stop.owl')
      })
    </script>
@stop