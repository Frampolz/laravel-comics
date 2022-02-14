<header>
    <div class="header__top">
        <div class="inner__header__top w70">
            <ul class="d-flex">
                <li>
                    <a href="">dc power visa
                </a>
                </li>
                <li>
                    <a href="">additional dc sites
                </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="header__bot d-flex w70">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/dc-logo.png') }}" alt="">

            </a>
        </div>
        <nav class="nav">
            <ul>
                
                <li><a href="">character</a></li>
                <li><a class="{{'comics' || 'comic' ===  Route::currentRouteName() ? 'active' : ''}}" href="{{ route('comics') }}">comics</a></li>
                <li><a href="">movies</a></li>
                <li><a href="">tv</a></li>
                <li><a href="">games</a></li>
                <li><a href="">collectibles</a></li>
                <li><a href="">videos</a></li>
                <li><a href="">fans</a></li>
                <li><a href="">news</a></li>
                <li><a href="">shop</a></li>
            </ul>
        </nav>
        <div class="search">
            <input type="text" placeholder="Search">
        </div>
    </div>
    <div class="jumbotron">
        <img src="{{asset('images/jumbotron.jpg')}}" alt="">
    </div>
</header>