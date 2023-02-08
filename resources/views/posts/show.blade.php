@extends('layouts.app')

@section('title')
    {{ $post->id }}
@endsection


@section('content')
    <h1>{{ $post->titulo }}</h1>

    <p>{{ $post->body }}</p>

    <a href="{{route('posts.index')}}">Regresar </a>
@endsection
