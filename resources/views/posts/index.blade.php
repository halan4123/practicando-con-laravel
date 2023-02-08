@extends('layouts.app')

@section('title', 'Blog')

@section('content')




    <h1>Blog</h1>

    <a href="{{ route('posts.create') }}">Crear nuevo post</a>

    {{-- @dump($postsExample) --}}

    @foreach ($postsExample as $post)
        {{-- <h2>{{ $post['title'] }}</h2> --}}
        {{-- <h1> @dump($post) </h1> --}}

        <div style="display: flex; align-items: baseline">
            <h2>
                <a href="{{ route('posts.show', $post->id) }}">
                    {{ $post->titulo }}
                </a>
            </h2>

            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
        </div>
    @endforeach

@endsection
