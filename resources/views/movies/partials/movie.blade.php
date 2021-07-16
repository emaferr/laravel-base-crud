<h1>MOVIE</h1>
<div class="text-right pb-3 px-3">
    <a href="{{route('movies.index')}}"><i style="font-size: 2rem" class="fas fa-arrow-circle-left"></i></a>
</div>
{{-- {{dd(Route::currentRouteName())}} --}}
<div class="text-center container">
    <img class='py-3' src="{{$movie->poster}}" alt="">
    <div class="body">
        <h3 class="py-3">{{$movie->title}}</h3>
        <p class="py-3 px-5">{{$movie->desc}}</p>
        <h5>&euro;&nbsp;{{$movie->price}}</h5>
    </div>
</div>