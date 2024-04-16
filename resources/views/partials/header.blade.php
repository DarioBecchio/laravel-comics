    <header>
        <section class="navbar">
            <a href="{{route('home')}}"><img src="{{ Vite::asset('resources/images/dc-logo.png') }}"></a>  
            <nav>
                <a href="{{route('characters')}}">CHARACTERS</a>
                <a href="{{route('comics')}}" class="{{ Route::currentRouteName() === 'comics' ? 'active' : ''}}">COMICS</a>
                <a href="{{route('movies')}}">MOVIES</a>
                <a href="{{route('tv')}}">TV</a>
                <a href="{{route('games')}}">GAMES</a>
                <a href="{{route('collectibles')}}">COLLECTIBLES</a>
                <a href="{{route('videos')}}">VIDEOS</a>
                <a href="{{route('fans')}}">FANS</a>
                <a href="{{route('news')}}">NEWS</a>
                <a href="{{route('shops')}}">SHOP</a>
            </nav> 
        </section>
        <section class="jumbotron">           
        </section>
            
    </header>