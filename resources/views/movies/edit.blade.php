@extends('layout.app')

@section('title','Edit'.$movie->title)

@section('content')
<h1>COMICS EDIT</h1>
<div class="container-xl pt-3">
    <div class="d-flex flex-column">
        <h2>Edit a comic</h2>
    <form action="{{route('movies.update',$movie->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Poster</label>
            <img width="100" src="{{$movie->poster}}" alt="" class="d-block pb-3">
            <input type="text" name="poster" id="poster" class="form-control" placeholder="Edit URL..."
                aria-describedby="helpId" value="{{$movie->poster}}">
            <small id="helpId" class="text-muted">Write the URL image of the movie</small>
        </div>
    
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Edit title..."
                aria-describedby="helpId" value="{{$movie->title}}">
            <small id="helpId" class="text-muted">Write the title of the movie</small>
        </div>

        <div class="form-group">
            <label for="">Descrption</label>
            <textarea class="form-control" name="desc" id="desc" rows="3">{{$movie->desc}}</textarea>
        </div>

        <div class="form-group">
            <label for="">Price</label>
            <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId"
                placeholder="Edit Price..." value="{{$movie->price}}">
            <small id="helpId" class="form-text text-muted">Insert price</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
    
</div>
@endsection