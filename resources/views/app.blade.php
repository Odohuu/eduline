<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Eduline admin</title>
        <link href="{{ asset('/css/bootstrap-markdown.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600,400&subset=cyrillic-ext' rel='stylesheet' type='text/css'>
        
        <!-- select2 -->
        <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/css/select2.min.css" rel="stylesheet" />
        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <!-- editor -->
        <link href="{{ asset('/css/ui/trumbowyg.min.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('partials.homeNav')
        @include('partials.nav')
        <div class="container">
            
            <br>
            <div class="row">
                @if (Auth::guest())
                <br/>
                <p class="bg-danger" style="text-align:center;">Та хэрэглэгчийн эрхээр нэвтрэх шаардлагатай.</p>
                @else
                <div class="col-sm-2 sidebar">
                    @include('partials.leftList')
                </div>
                @endif
                <div class="col-sm-10">
                    @include('flash::message')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    
    @yield('footer')
    <!-- select2 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/js/select2.min.js"></script>
    <script>
    $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
    <!--editor-->
    
    <script src="{{ asset('/js/trumbowyg.min.js') }}"></script>
    <script type="text/javascript">
        $('#editor').trumbowyg({
            fullscreenable: false,
            closable: true
        });
    </script>
    
</body>
</html>