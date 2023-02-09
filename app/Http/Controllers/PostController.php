<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController
{

    public function index()
    {

        // $posts1 = [
        //     ['title' => 'First post'],
        //     ['title' => 'Second post'],
        //     ['title' => 'Third post'],
        //     ['title' => 'Fourth post'],
        // ];

        $posts1 = DB::table('posts')->get();

        return view('posts.index', ['postsExample' => $posts1]);
    }

    public function show(Post $post_Id)
    {

        //Con el Post en la parte de arriba es lo mismo que esto -> Post::findOrFail($post_Id);

        return view('posts.show', ['post' => $post_Id]);
    }

    public function create()
    {

        //Con el Post en la parte de arriba es lo mismo que esto -> Post::findOrFail($post_Id);

        return  view('posts.create');
    }

    public function store(Request $request)
    {

        //validaciones
        $request->validate([
            'titulo' => ['required', 'min:4'],
            'body' => ['required'],
        ], [
            'titulo.required' => 'Error diferente :attribute'
        ]);

        //Aqui estaos usando el modelo
        $post = new Post();

        $post->titulo = $request->input('titulo');
        $post->body = $request->input('body');

        $post->save();

        session()->flash('status', 'Post Creado');

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {

        //Con el Post en la parte de arriba es lo mismo que esto -> Post::findOrFail($post_Id);

        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {

        //Con el Post en la parte de arriba es lo mismo que esto -> Post::findOrFail($post_Id);
        //validaciones
        $request->validate([
            'titulo' => ['required', 'min:4'],
            'body' => ['required'],
        ], [
            'titulo.required' => 'Error diferente :attribute'
        ]);

        //Aqui estaos usando el modelo

        $post->titulo = $request->input('titulo');
        $post->body = $request->input('body');

        $post->save();

        session()->flash('status', 'Post Update');

        return redirect()->route('posts.show', $post);
    }
}
