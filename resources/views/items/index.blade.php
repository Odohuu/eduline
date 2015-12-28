@extends('app')
@section('content')
<h4>Фото слайд</h4>
<div class="row text-center">
    <a class="btn btn-default" href="/items/create">үүсгэх</a>
</div>
<br>
@foreach(array_chunk($items->all(), 3) as $row)
<div class="row">
    @foreach($row as $item)
    <div class="col-md-4">
        <a href="{{ $item->slug }}">
            <div class="thumbnail" style="min-height: 250px;">
                <div class="caption">
                    <p>{{ $item->description }}</p>
                    <p>Created date:  {{ date("d F Y",strtotime($item->created_at)) }} at {{date("g:ha",strtotime($item->created_at)) }}</p>
                </div>
                <img alt="{{ $item->description }}" src="/images/slides/{{ $item->image }}">
                <br />
                <p><a href="{{ URL::route('items.edit', array('id'=>$item->id))  }}" class="btn btn-big btn-default">edit Gallery</a></p>
            </div>
        </a>
    </div>
    @endforeach
</div>
<hr />
@endforeach
<?php echo $items->render(); ?>
@stop