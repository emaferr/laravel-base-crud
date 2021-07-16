@extends('layout.app')

@section('title','Comics Create')

@section('content')
<h1>COMICS CREATE</h1>
<div class="container-xl pt-3">

    <div class="d-flex flex-column">
        <h2>Add a comic</h2>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Poster</label>
            <input type="text" name="poster" id="poster" class="form-control" placeholder="Add URL..."
                aria-describedby="helpId" value="{{old('poster')}}" required>
            <small id="helpId" class="text-muted">Write the URL image of the comic</small>
        </div>
    
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Add title..."
                aria-describedby="helpId" value="{{old('title')}}" required>
            <small id="helpId" class="text-muted">Write the title of the comic</small>
        </div>

        <div class="form-group">
            <label for="">Autor</label>
            <input type="text" class="form-control" name="autor" id="autor" aria-describedby="helpId"
                placeholder="Add Autor..." value="{{old('autor')}}" required>
            <small id="helpId" class="form-text text-muted">Write the authors of the comic</small>
        </div>

        <div class="form-group">
            <label for="">Descrption</label>
            <textarea class="form-control" name="desc" id="desc" rows="3" value="{{old('desc')}}" required></textarea>
        </div>

        <div class="form-group">
            <label for="">Price</label>
            <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId"
                placeholder="Add Price..." value="{{old('price')}}" required>
            <small id="helpId" class="form-text text-muted">Insert price</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
    
</div>
@endsection