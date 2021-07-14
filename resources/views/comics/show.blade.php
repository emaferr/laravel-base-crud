@extends('layout.app')

@section('title','Comic: '.$comic->title)

@section('content')

@include('comics.partials.comic')

@endsection