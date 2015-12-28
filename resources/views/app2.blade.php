<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eduline LLC</title>
    <link rel=icon href="{{ asset('/images/sites/eduline-favicon.png') }}" sizes="32x32" type="image/vnd.microsoft.icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- css -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    
    <!-- slide -->
    <link rel="stylesheet" href="{{ asset('/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/asset.css') }}">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600,400&subset=cyrillic-ext' rel='stylesheet' type='text/css'>
    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('/js/swiper.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.snow.min.1.0.js') }}"></script>
</head>
<body>

    @include('partials.homeNav')
    
    @yield('welcome')
    
    @yield('school')
    
    @yield('content')
    
    @include('partials.footer')
    @include('partials.link')
    
    <!-- js -->
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <script type="text/JavaScript">
        function killCopy(e){
        return false
        }
        function reEnable(){
        return true
        }
        document.onselectstart=new Function ("return false")
        if (window.sidebar){
        document.onmousedown=killCopy
        document.onclick=reEnable
        }
    </script>
    <script>
        $(document).ready( function(){
            $.fn.snow({ minSize: 10, maxSize: 20, newOn: 100 });
        });
    </script>
</body>
</html>