@extends('app2')

@section('content')
<div class="container">
  <div class="page-header">
      <h4>ОНЦЛОХ МЭДЭЭ</h4>
  </div>
    @foreach(array_chunk($items->all(), 3) as $row)
        <div class="row">
          @foreach($row as $item)
            <div class="col-md-4">
              <a href="{{ $item->slug }}">
              <div class="thumbnail" style="min-height: 250px;">
                <div class="caption">
                  <p>{{ $item->description }}</p>
                  <p><span class="date">Хугацаа: {{ $item->created_at }}</span></p>
                </div>
                <img alt="{{ $item->description }}" src="/images/slides/{{ $item->image }}">
                <br />
              </div>
              </a>
            </div>
          @endforeach
        </div>
        <hr />
    @endforeach

    <?php echo $items->render(); ?>
</div>
    <div class="space"></div>
@stop