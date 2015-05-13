
<div class="form-group">
    {!! Form::label('category_id','Ангилал:') !!}
    {!! Form::select('category_id', $category, null, ['id' => 'category_id', 'class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('title','Гарчиг:') !!}
    {!! Form::text('title',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content','Агуулга:') !!}
    {!! Form::textarea('content',null, ['id' => 'summernote','class'=>'form-control summernote']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at','Нийтэлсэн хугацаа:') !!}
    {!! Form::input('date', 'published_at', $article->published_at, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('thumbnail','Thumbnail:') !!}
    {!! Form::text('thumbnail',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary ']) !!}
</div>

@section('footer')
@endsection