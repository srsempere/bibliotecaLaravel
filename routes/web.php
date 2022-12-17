<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Route::get       Consultar
 * Routes::post     Guardar
 * Route::delete    Eliminar
 * Route::put       Actualizar
 */

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('blog', function () {
    // SIMULACIÓN: Consulta a base de datos.
    $posts = [
        ['id' => 1, 'title' => 'PHP',     'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel']
    ];
    return view('blog', ['posts' => $posts]);
})->name('blog');

Route::get('blog/{slug}', function ($slug) {
    // SIMULACIÓN: Consulta a base de datos.
    $post = $slug;

    return view('post', ['post' => $post]);
})->name('post');
