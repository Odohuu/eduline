<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <title>Eduline LLC</title>
    <link rel=icon href="{{ asset('/images/sites/eduline-favicon.png') }}" sizes="32x32" type="image/vnd.microsoft.icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    @yield('share')
    <!-- css -->
    <link href="{{ elixir('css/styles.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('/css/tabby.css') }}" type="text/css"> -->
    <!-- slide -->
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">



    <!-- Fonts -->
    
    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    
    
</head>
<body >
<div id="main">
    @include('partials.home_nav')
    @yield('home')
    
    @yield('school')
    
    @yield('content')
    
    @include('partials.footer')

    @include('partials.link')

    <a href="#top" id="scrollupA" ><i class="glyphicon glyphicon-chevron-up"></i></a>
</div>    

    <!-- js -->
<!--     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->


    <script src="{{ asset('/js/main.js') }}"></script>

    <script>
        $(document).ready(function(){

            // hide #back-top first
            $("#scrollupA").hide();
            
            // fade in #back-top
            $(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        $('#scrollupA').fadeIn();
                    } else {
                        $('#scrollupA').fadeOut();
                    }
                });

                // scroll body to 0px on click
                $('#scrollupA a').click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });

        });
    </script>

    <script src="{{ asset('/js/tabby.js') }}"></script>
    <script>
            tabby.init({
                toggleActiveClass: 'active',
            });
    </script>
    <script>
    window.fbAsyncInit = function() {
        FB.init({
        appId      : '573510532801046',
        xfbml      : true,
        version    : 'v2.5'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    
    
    
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
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

    <script src="{{ asset('/js/jquery.mixitup.min.js') }}"></script>
    @yield('gallery')
</body>
</html>