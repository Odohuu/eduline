<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eduline LLC</title>
    <link rel=icon href="{{ asset('/images/sites/favicon.ico') }}" sizes="32x32" type="image/vnd.microsoft.icon">
    {{--css--}}
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    
    {{--slide--}}
    <link href="{{ asset('/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.theme.default.min.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600,400&subset=cyrillic-ext' rel='stylesheet' type='text/css'>


    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    {{--slide--}}
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

</head>
<body>

    @include('partials.homeNav')

    @yield('welcome')
    @yield('school')
    
    @yield('content')
    
    @include('partials.footer')

</body>
</html>