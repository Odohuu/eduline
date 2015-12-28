<nav class="main1">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" style="padding:5px 10px;" href="{!! URL::to('') !!}"><img src="{{url('/images/sites/eduline-logo.png')}}" alt="eduline logo" width="107"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
        
        <ul class="main1-nav">
            <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/categories/4">Бидний тухай</a></li>
            <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/articles">Зар мэдээ</a></li>
            <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/categories/12">Сонирхолтой мэдээ</a></li>
            <li class="{{ Request::is('allAlbums') ? 'active' : '' }}"><a href="/allAlbums">Фото цомог</a></li>
            <li class="{{ Request::is('schools') ? 'active' : '' }}"><a href="/schools">Сургуулиуд</a></li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Холбоо барих</a></li>
        </ul>
        </div>
    </div>
</nav>
<nav id="main2" class="main2 navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? 'active' : '' }} text-uppercase flag_of_size">
                    <a href="/" class="flag_of">
                        <img src="{{url('/images/sites/home.png')}}" alt="home" height="28">
                        <div>Эхлэл</div>
                    </a>
                </li>  
                <li class="{{ Request::is('countries/1') ? 'active' : '' }} text-uppercase flag_of_size">
                    <a href="/countries/1" class="flag_of">
                    <img src="{{url('/images/sites/Flag_of_the_United_States.png')}}" alt="Flag_of_the_United_States" height="28">
                    <div>Америк</div>
                    </a>
                </li>
                <li class="{{ Request::is('countries/2') ? 'active' : '' }} text-uppercase flag_of_size"><a href="/countries/2" class="flag_of">
                <img src="{{url('/images/sites/Flag_of_South_Korea.png')}}" alt="Flag_of_South_Korea" height="28">
                    <div>Солонгос</div>
                </a>
                </li>
                <li class="{{ Request::is('countries/3') ? 'active' : '' }} text-uppercase flag_of_size">
                    <a href="/countries/3" class="flag_of">
                        <img src="{{url('/images/sites/Flag_of_Australia.png')}}" alt="Flag_of_Australia" height="28">
                        <div>Австрали</div>
                    </a>
                </li>
                <li class="{{ Request::is('countries/4') ? 'active' : '' }} text-uppercase flag_of_size">
                    <a href="/countries/4" class="flag_of">
                        <img src="{{url('/images/sites/Flag_of_Canada.png')}}" alt="Flag_of_Canada" height="28">
                        <div>Канад</div>
                    </a>
                </li>
                <li class="{{ Request::is('countries/5') ? 'active' : '' }} text-uppercase flag_of_size">
                    <a href="/countries/5" class="flag_of">
                        <img src="{{url('/images/sites/Flag_of_Japan.png')}}" alt="Flag_of_Japan" height="28">
                        <div>Япон</div>
                    </a>
                    </li>
                <li class="{{ Request::is('countries/7') ? 'active' : '' }} text-uppercase flag_of_size">
                    <a href="/countries/7" class="flag_of">
                        <img src="{{url('/images/sites/Flag_of_Philippine.png')}}" alt="Flag_of_Philippine" height="28">
                        <div>Филиппин</div>
                    </a>
                </li>
                <li class="{{ Request::is('lessons') ? 'active' : '' }} text-uppercase flag_of_size">
                    <a href="/lessons" class="flag_of">
                        <img src="{{url('/images/sites/lesson.png')}}" alt="lesson" height="28">
                        <div>Хичээл</div>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>