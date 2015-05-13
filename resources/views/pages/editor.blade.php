@extends('app2')

@section('welcome')

    <div class="container">
        <textarea id="some-textarea" placeholder="Enter text ..." style="width: 810px; height: 200px"></textarea>
        <script type="text/javascript">
            $('#some-textarea').wysihtml5();
        </script>
    </div>

@stop