<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



//Primer parametro: La ruta
//Segundo parametro: La vista
//Tercer parametro (opcional): Datos
Route::view('/', 'welcome')->name('home');

Route::view('/contacto', 'contact')->name('contact');

Route::get('/blog', [PostController::class , 'index'])->name('blog');

Route::view('/about', 'about')->name('about');
