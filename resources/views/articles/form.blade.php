
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
    {!! Form::textarea('content',null, ['id' => 'wysihtml5', 'class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at','Нийтэлсэн хугацаа:') !!}
    {!! Form::input('date', 'published_at', $article->published_at, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary ']) !!}
</div>

<script type="text/javascript">
    $('#wysihtml5').wysihtml5({
        "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
        "emphasis": true, //Italics, bold, etc. Default true
        "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
        "html": true, //Button which allows you to edit the generated HTML. Default false
        "link": true, //Button to insert a link. Default true
        "image": true, //Button to insert an image. Default true,
        "color": true //Button to change color of font
    });
</script>
@section('footer')
    <script>
        $('#tag_list').select2({
            placeholder: 'Ангилалыг сонгох'
        });
    </script>
@endsection