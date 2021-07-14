@extends('layout.app')

@section('title','Movie: '.$movie->title)

@section('content')

@include('movies.partials.movie')

@endsection