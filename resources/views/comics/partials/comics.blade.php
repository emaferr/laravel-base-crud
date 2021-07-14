<h1 class="pb-2">COMICS</h1>
<div class="text-right pb-3 px-3">
    <a href="{{route('comics.create')}}"><i style="font-size: 2rem" class="fas fa-plus-circle"></i></a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>POSTER</th>
            <th>TITLE</th>
            <th>AUTOR</th>
            <th>DESCRIPTION</th>
            <th>PRICE</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <td scope="row">{{$comic->id}}</td>
            <td><a href="{{route('comics.show',$comic->id)}}"><img width="100" src="{{$comic->poster}}" alt=""></a></td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->autor}}</td>
            <td>{{$comic->desc}}</td>
            <td>&euro;&nbsp;{{$comic->price}}</td>
        </tr>
        @endforeach
    </tbody>
</table>