<!-- Sidebar nav -->
<div id="mySidenav" class="sidenav">
    <ul>
        <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a></li>
        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Нүүр</a></li>
        <li class="{{ Request::is('/about/4') ? 'active' : '' }}"><a href="/about/4">Бидний тухай</a></li>
        <li class="{{ Request::is('/category/1') ? 'active' : '' }}"><a href="/category/1">Онцлох мэдээ</a></li>
        <li class="{{ Request::is('/category/12') ? 'active' : '' }}"><a href="/category/12">Сонирхолтой мэдээ</a></li>
        <li class="{{ Request::is('galleries') ? 'active' : '' }}"><a href="/galleries">Фото цомог</a></li>
        <li class="{{ Request::is('allschools') ? 'active' : '' }}"><a href="/allschools">Сургуулиуд</a></li>
        <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Холбоо барих</a></li>

        <li class="{{ Request::is('/country/1') ? 'active' : '' }}"><a href="/country/1">Америк</a></li>
        <li class="{{ Request::is('/country/2') ? 'active' : '' }}"><a href="/country/2">Солонгос</a></li>
        <li class="{{ Request::is('/country/3') ? 'active' : '' }}"><a href="/country/3">Австрали</a></li>
        <li class="{{ Request::is('/country/4') ? 'active' : '' }}"><a href="/country/4">Канад</a></li>
        <li class="{{ Request::is('/country/5') ? 'active' : '' }}"><a href="/country/5">Япон</a></li>
        <li class="{{ Request::is('/country/7') ? 'active' : '' }}"><a href="/country/7">Филиппин</a></li>
        <li class="{{ Request::is('/lessons') ? 'active' : '' }}"><a href="/lessons">Хичээл</a></li>
    </ul>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
        }
    </script>
</div>

<span id="sidebar_btn" style="font-size:30px;cursor:pointer;" onclick="openNav()">☰</span>

<nav id="mainnav1" class="mainnav1 navbar navbar-default">
    <div class="container">
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-2">
        <div class="phone">Утас: 7011-0503, 1132-0535</div>
        <ul class="mainnav1-nav">
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Нүүр</a></li>
            <li class="{{ Request::is('/about/4') ? 'active' : '' }}"><a href="/about/4">Бидний тухай</a></li>
            <li class="{{ Request::is('/category/1') ? 'active' : '' }}"><a href="/category/1">Зар мэдээ</a></li>
            <li class="{{ Request::is('/category/12') ? 'active' : '' }}"><a href="/category/12">Сонирхолтой мэдээ</a></li>
            <li class="{{ Request::is('galleries') ? 'active' : '' }}"><a href="/galleries">Фото цомог</a></li>
            <li class="{{ Request::is('allschools') ? 'active' : '' }}"><a href="/allschools">Сургуулиуд</a></li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Холбоо барих</a></li>
        </ul>
        </div>
    </div>
</nav>
<div class="container">

    <div class="slogan"></div>
</div>
<nav id="mainnav2" class="mainnav2 navbar navbar-default">
    <div class="container">
        <div class="logo">
            <a class="{{ Request::is('/') ? 'active' : '' }}" href="{!! URL::to('') !!}">
                    <img src="{{url('/images/sites/eduline-12jil-logo.png')}}" alt="eduline logo">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('country/1') ? 'active' : '' }}">
                    <a href="/country/1" class="flag_of">
                    <img src="{{url('/images/sites/Flag_of_the_United_States.png')}}" alt="Flag_of_the_United_States">
                    <div class="menu-text">Америк</div>
                    </a>
                </li>
                <li class="{{ Request::is('country/2') ? 'active' : '' }}">
                    <a href="/country/2" class="flag_of">
                    <img src="{{url('/images/sites/Flag_of_South_Korea.png')}}" alt="Flag_of_South_Korea">
                        <div class="menu-text">Солонгос</div>
                    </a>
                </li>
                <li class="{{ Request::is('country/3') ? 'active' : '' }}">
                    <a href="/country/3" class="flag_of">
                        <img src="{{url('/images/sites/Flag_of_Australia.png')}}" alt="Flag_of_Australia" >
                        <div class="menu-text">Австрали</div>
                    </a>
                </li>
                <li class="{{ Request::is('country/4') ? 'active' : '' }}">
                    <a href="/country/4" class="flag_of">
                        <img src="{{url('/images/sites/Flag_of_Canada.png')}}" alt="Flag_of_Canada">
                        <div class="menu-text">Канад</div>
                    </a>
                </li>
                <li class="{{ Request::is('country/5') ? 'active' : '' }}">
                    <a href="/country/5" class="flag_of">
                        <img src="{{url('/images/sites/Flag_of_Japan.png')}}" alt="Flag_of_Japan">
                        <div class="menu-text">Япон</div>
                    </a>
                    </li>
                <li class="{{ Request::is('country/7') ? 'active' : '' }}">
                    <a href="/country/7" class="flag_of">
                        <img src="{{url('/images/sites/Flag_of_Philippine.png')}}" alt="Flag_of_Philippine">
                        <div class="menu-text">Филиппин</div>
                    </a>
                </li>
                <li class="{{ Request::is('lessons') ? 'active' : '' }} flag_of_size">
                    <a href="/lessons" class="flag_of">
                        <img src="{{url('/images/sites/lesson.png')}}" alt="lesson">
                        <div class="menu-text">Хичээл</div>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>