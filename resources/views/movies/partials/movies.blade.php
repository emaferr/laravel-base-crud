<h1 class="pb-2">MOVIES</h1>
<div class="text-right pb-3 px-3">
    <a href="{{route('movies.create')}}"><i style="font-size: 2rem" class="fas fa-plus-circle"></i></a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>POSTER</th>
            <th>TITLE</th>
            <th>DESCRIPTION</th>
            <th>PRICE</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
        <tr>
            <td scope="row">{{$movie->id}}</td>
            <td><a href="{{route('movies.show',$movie->id)}}"><img width="100" src="{{$movie->poster}}" alt=""></a></td>
            <td>{{$movie->title}}</td>
            <td>{{$movie->desc}}</td>
            <td>&euro;&nbsp;{{$movie->price}}</td>
        </tr>
        @endforeach
    </tbody>
</table>