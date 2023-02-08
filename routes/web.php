<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



//Primer parametro: La ruta
//Segundo parametro: La vista
//Tercer parametro (opcional): Datos
Route::view('/', 'welcome')->name('home');

Route::view('/contacto', 'contact')->name('contact');

Route::get('/blog', [PostController::class, 'index'])->name('posts.index');

Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/blog', [PostController::class, 'store'])->name('posts.store');

Route::get('/blog/{post_Id}', [PostController::class, 'show'])->name('posts.show');

Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');



Route::view('/about', 'about')->name('about');
