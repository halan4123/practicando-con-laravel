@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <h1>Blog</h1>

    {{-- @dump($postsExample) --}}

    @foreach ($postsExample as $post)
        <h2>{{ $post['title'] }}</h2>
    @endforeach

@endsection
