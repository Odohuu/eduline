<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Eduline admin</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    {{--jcrop--}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.12/css/jquery.Jcrop.min.css">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'>


    {{--select2--}}
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/css/select2.min.css" rel="stylesheet" />
    {{--editor--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-wysihtml5.css') }}">

    <script src="{{ asset('js/wysihtml5-0.3.0.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-wysihtml5.js') }}"></script>

</head>
<body>
    <div class="container">
        @if (Auth::guest())
            <p style="text-align:center;">Та хэрэглэгчийн эрхээр нэвтрэх шаардлагатай.</p>
        @else
            @include('partials.nav')
        @endif
    </div>
    <div class="container">
        @include('flash::message')

        @yield('content')
    </div>
    <div class="container">
        <!-- Modal -->
        {{--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
            {{--<div class="modal-dialog">--}}
                {{--<div class="modal-content">--}}
                    {{--<div class="modal-header">--}}
                        {{--<h4 class="modal-title" id="myModalLabel">Image hadgalah</h4>--}}
                    {{--</div>--}}
                    {{--<div class="modal-body">--}}
                        {{--{!! Form::open(['route' => 'cropImage', 'onsubmit' => 'return checkCoords();']) !!}--}}

                            {{--{!! Html::image($data['image'], '', ['id' => 'crop']) !!}--}}


                    {{--</div>--}}
                    {{--<div class="modal-footer">--}}
                        {{--<button type="submit" class="btn btn-primary">Save image</button>--}}
                        {{--{!! Form::close() !!}--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--{!! Form::open(['route' => 'postImage', 'files' => 'true']) !!}--}}

                {{--{!! Html::image($data['image'], '') !!}--}}
                    {{--<input type="hidden" id="x" name="x"/>--}}
                    {{--<input type="hidden" id="y" name="y"/>--}}
                    {{--<input type="hidden" id="w" name="w"/>--}}
                    {{--<input type="hidden" id="h" name="h"/>--}}

                {{--<input type="hidden" name="img_backup" value="{{ $data['image'] }}"/>--}}
                {{--<br>--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::label('image','Зураг оруулах:') !!}--}}
                    {{--{!! Form::file('image', ['class'=>'form-control']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::submit('Upload Photo', ['class'=>'btn btn-primary ']) !!}--}}
                {{--</div>--}}
            {{--{!! Form::close() !!}--}}

            {{--<input type="hidden" id="modal" value="{{ $data['modal'] }}"/>--}}

        {{--</div>--}}
    </div>

    <!-- editor -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    {{--select2--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/js/select2.min.js"></script>
    {{--jcrop--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.12/js/jquery.Jcrop.min.js"></script>
    {{--<script>--}}

        {{--var modal;--}}

        {{--if($('#modal').val() == 'true'){--}}
            {{--modal = true;--}}
        {{--}else{--}}
            {{--modal = false;--}}
        {{--}--}}

        {{--$(document).ready(function(){--}}
            {{--$('#crop').Jcrop({--}}
                {{--aspectRatio: 1,--}}
                {{--onSelect:showPreview--}}
                {{--//                        onChange:showPreview--}}
            {{--});--}}

            {{--$('#mymodel').modal({show: modal});--}}

        {{--});--}}
        {{--function showPreview(c)--}}
        {{--{--}}
            {{--$('#x').val(c.x);--}}
            {{--$('#y').val(c.y);--}}
            {{--$('#w').val(c.w);--}}
            {{--$('#h').val(c.h);--}}
        {{--}--}}
        {{--function checkCoords(){--}}
            {{--if(parseInt($('#w').var())) return true;--}}
            {{--alert('Selection');--}}
            {{--return false;--}}
        {{--}--}}
    {{--</script>--}}

    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
    @yield('footer')
</body>
</html>
