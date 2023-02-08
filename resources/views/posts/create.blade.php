@extends('layouts.app')

@section('title')
    Create
@endsection


@section('content')
    <h2>Create new post</h2>

    {{-- @dump($errors->all()) --}}

    <form action="{{ route('posts.store') }}" method="POST">

        @csrf

        <label>

            Titulo <br>

            <input type="text" name="titulo" value="{{ old('titulo') }}">

            @error('titulo')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror

        </label>

        <br>

        <label>

            Body <br>

            <textarea name="body" id="" cols="30" rows="10">{{ old('body') }}</textarea>

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
