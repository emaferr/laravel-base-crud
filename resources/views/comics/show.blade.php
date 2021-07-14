@extends('layout.app')

@section('title','Comics {{$comic->title}}')

@section('content')

@include('comics.partials.comic')

@endsection