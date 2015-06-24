<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Eduline admin</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600,400&subset=cyrillic-ext' rel='stylesheet' type='text/css'>
    <!-- editor -->
    <link href="{{ asset('/css/summernote.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- select2 -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/css/select2.min.css" rel="stylesheet" />

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    

    <!-- editor -->
    <script src="{{ asset('js/summernote.min.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $('#summernote').summernote({
                width: 865,
                height: 350
            });
        });
    </script>
    

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
    

    <!-- select2 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/js/select2.min.js"></script>

    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
    @yield('footer')
    
</body>
</html>