<h1>COMIC</h1>
<div class="text-right pb-3 px-3">
    <a href="{{route('comics.index')}}"><i style="font-size: 2rem" class="fas fa-arrow-circle-left"></i></a>
</div>
{{-- {{dd(Route::currentRouteName())}} --}}
<div class="text-center container">
    <img class='py-3' src="{{$comic->poster}}" alt="">
    <div class="body">
        <h3 class="py-3">{{$comic->title}}</h3>
        <span>{{$comic->autor}}</span>
        <p class="py-3">{{$comic->desc}}</p>
        <h5>&euro;&nbsp;{{$comic->price}}</h5>
    </div>
</div>