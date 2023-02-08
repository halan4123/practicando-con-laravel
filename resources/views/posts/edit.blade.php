@extends('layouts.app')

@section('title')
    {{ $post->id }}
@endsection


@section('content')
    <h1>Editar formulario</h1>

    <h1>{{ $post->body }}</h1>

    <a href="{{ route('posts.index') }}">Regresar </a>
@endsection
