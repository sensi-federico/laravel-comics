<header>

    <div class="banner-top d-flex justify-content-end bg-primary text-white py-1">
        <p class="pe-5 m-0">DC POWER VISA</p>
        <p class="pe-3 m-0">ADDITIONAL DC SITES</p>
    </div>


    <nav class="navbar justify-content-around align-items-center mt-4">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="">
        </div>

        <div class="links">
            <a class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}" href="#" aria-current="page">characters</a>
            <a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}" aria-current="page">comics</a>
            <a class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="#" aria-current="page">movies</a>
            <a class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}" href="#" aria-current="page">tv</a>
            <a class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}" href="#" aria-current="page">games</a>
            <a class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}" href="#" aria-current="page">collectibles</a>
            <a class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}" href="#" aria-current="page">videos</a>
            <a class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}" href="#" aria-current="page">fans</a>
            <a class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" href="#" aria-current="page">shop</a>
            <a class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}" href="#" aria-current="page">news</a>
        </div>

        <div class="search">
            <p class="m-0">search <i class="fa fa-search" aria-hidden="true"></i></p>
        </div>
    </nav>

</header>