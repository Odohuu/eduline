<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Eduline admin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="/home">Нүүр</a></li>
                <li class="{{ Request::is('allArticles') ? 'active' : '' }} dropdown">
                    <a href="allArticles" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Нийтлэл <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="/allArticles">Нийт</a></li>
                        <li class="divider"></li>
                        <li><a href="articles/create">Шинэээр үүсгэх</a></li>
                      </ul>
                </li>
                <li class="{{ Request::is('categories') ? 'active' : '' }} dropdown">
                    <a href="/categories" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ангилал <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="/categories">Нийт</a></li>
                        <li class="divider"></li>
                        <li><a href="categories/create">Шинэээр үүсгэх</a></li>
                      </ul>
                </li>
                <li class="{{ Request::is('photos') ? 'active' : '' }} dropdown">
                    <a href="/photos" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Зураг <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="/photos">Нийт</a></li>
                        <li class="divider"></li>
                        <li><a href="photos/create">Шинэээр үүсгэх</a></li>
                      </ul>
                </li>
                <li class="{{ Request::is('schools') ? 'active' : '' }} dropdown">
                    <a href="/schools" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Сургууль <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="/schools">Нийт</a></li>
                        <li class="divider"></li>
                        <li><a href="schools/create">Шинэээр үүсгэх</a></li>
                      </ul>
                </li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                {{--<li>{!! link_to_action('ArticlesController@show',$latest->title, [$latest->id]) !!}</li>--}}
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    <li><a href="{{ url('/auth/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>