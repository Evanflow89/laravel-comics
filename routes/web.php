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

Route::get('/', function () {
    $linkhead = config('linkhead');
    $comics = config('comics');

    return view('home', compact('linkhead'), compact('comics'));
    
})->name('home');


Route::get('comic/{id}', function ($id) {
    $linkhead = config('linkhead');
    $comics = config('comics');
    if ($id >= count($comics)) {
        abort('404');
    }
    $comic = $comics[$id];

    return view('comic', compact('comic'), compact('linkhead'));
})->where('id', '[0-9]+')->name('comic');