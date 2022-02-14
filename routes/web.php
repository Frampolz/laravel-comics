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
    return view('guest/landingPage', ['title' => 'Home']);
})->name('home');

Route::get('/comics', function () {
    return view('guest/comics', ['data'=> config('comics'),'title' => 'Comics']);
})->name('comics');

Route::get("/comic/{id}", function ($id) {
    $data = config('comics');
    $collection = collect($data);
    $comic= $collection->where('id',$id);
    $singleComic = null;
    foreach ($comic as $value) {
        $singleComic = $value;
    }
    /* dd($singleCard); */
    return view('guest/comic', ['singleComic'=> ($singleComic), 'title' => $singleComic['title']]);
})->name('comic');
