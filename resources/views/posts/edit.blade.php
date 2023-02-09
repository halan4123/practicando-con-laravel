@extends('layouts.app')

@section('title')
    {{ $post->id }}
@endsection


@section('content')
    <h1>Editar formulario</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">

        @csrf @method('PATCH')

        <label>

            Titulo <br>

            <input type="text" name="titulo" value="{{ old('titulo', $post->titulo) }}">

            @error('titulo')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror

        </label>

        <br>

        <label>

            Body <br>

            <textarea name="body" id="" cols="30" rows="10">{{ old('body', $post->body) }}</textarea>

            @error('body')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror

        </label>

        <br>
        <button type="submit">Enviar</button>
        <br>
    </form>

    <a href="{{ route('posts.index') }}">Regresar </a>
@endsection
