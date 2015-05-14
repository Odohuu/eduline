<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eduline LLC</title>

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    {{--css--}}
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    {{--slide--}}
    <link href="{{ asset('/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.theme.default.min.css') }}" rel="stylesheet">

    {{--editor--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-wysihtml5.css') }}">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500&subset=cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>

    {{--editor--}}
    <script src="{{ asset('js/wysihtml5-0.3.0.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-wysihtml5.js') }}"></script>
    {{--slide--}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

</head>
<body>

    @include('partials.homeNav')

    @yield('welcome')
    <div class="container">
        @yield('content')
    </div>
    <hr />
    @include('pages.tuslah')
    @include('partials.footer')

</body>
</html>