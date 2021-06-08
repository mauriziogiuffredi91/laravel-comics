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


// Comics
Route::get('/', function () {

    //metodo config di chiamata prodotti

    $comics = config('comics');

    //dump($comics);
    return view('comics', ['cards' => $comics] );
})->name('comics');

//news
Route::get('/news', function() {
    return view('news');
})->name('news');


