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

    $comics_info = config('comics');
    return view('home', compact('comics_info'));
});

Route::get('/{key}', function($key) {
    $comics_info = config('comics');

    if(is_numeric($key) && $key >= 0 && $key <= count($comics_info)){
        $single_comic_info = $comics_info[$key];
    }else{
        abort(404);
    }

    return view('comics', compact('single_comic_info'));
})->name('comic');
