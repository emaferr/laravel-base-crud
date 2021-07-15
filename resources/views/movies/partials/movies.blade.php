<h1 class="pb-2">MOVIES</h1>
<div class="text-right pb-3 px-3">
    <a href="{{route('movies.create')}}"><i style="font-size: 2rem" class="fas fa-plus-circle"></i></a>
</div>
<table class="table container">
    <thead>
        <tr>
            <th>ID</th>
            <th>POSTER</th>
            <th>TITLE</th>
            <th>DESCRIPTION</th>
            <th>PRICE</th>
            <th>ACTIONS</th>
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
            <td class="action">
                <a class="px-2" href="{{route('movies.edit',$movie->id)}}">EDIT</a>
                <form action="{{route('movies.destroy',$movie->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button id="trash" type="submit"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>