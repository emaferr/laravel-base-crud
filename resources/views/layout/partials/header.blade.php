<header class="p-3 bg-light shadow-sm">
    <h5 class="text-primary">SITE HEADER</h5>
    <div class="pt-3">
        <a class="{{Route::currentRouteName()==='home' ? 'active' : ''}}" href="{{route('home')}}" >Home</a>
        <a class="{{Route::currentRouteName()==='comics.index' || Route::currentRouteName()==='comics.show' ? 'active' : ''}} px-3" href="{{route('comics.index')}}">Comics</a>
        <a class="{{Route::currentRouteName()==='movies.index' || Route::currentRouteName()==='movies.show' ? 'active' : ''}}" href="{{route('movies.index')}}">Movies</a>
    </div>
</header>