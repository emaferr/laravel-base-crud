<h1>COMIC</h1>
<div class="text-center">
    <img class='py-3' src="{{$comic->poster}}" alt="">
    <div class="body">
        <h3 class="py-3">{{$comic->title}}</h3>
        <span>{{$comic->autor}}</span>
        <p class="py-3">{{$comic->desc}}</p>
        <h5>&euro;&nbsp;{{$comic->price}}</h5>
    </div>
</div>