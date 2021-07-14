<header class="p-3">
    SITE HEADER
    <div class="pt-3">
        <a class="{{Route::currentRouteName()==='home' ? 'active' : ''}}" href="{{route('home')}}" >Home</a>
        <a class="{{Route::currentRouteName()==='comics.index' || Route::currentRouteName()==='comics.show' ? 'active' : ''}} px-3" href="{{route('comics.index')}}">Comics</a>
    </div>
</header>