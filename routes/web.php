<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('guests.welcome');
});

Route::get('/characters', function () {
    return view('guests.characters');
});
Route::get('/comics', function () {
    return view('guests.comics');
});
Route::get('/movies', function () {
    return view('guests.movies');
});
Route::get('/tv', function () {
    return view('guests.tv');
});
Route::get('/games', function () {
    return view('guests.games');
});
Route::get('/collectibles', function () {
    return view('guests.collectibles');
});
Route::get('/videos', function () {
    return view('guests.videos');
});
Route::get('/fans', function () {
    return view('guests.fans');
});
Route::get('/news', function () {
    return view('guests.news');
});
Route::get('/characters', function () {
    return view('guests.characters');
});


##Example
/*Route::get('/about', function () { 
    $data = [
        'name'=> 'Dario',
        'lastname'=>'Becchio',
    ];
    return view('guests.about', $data);
});

Route::get('/contacts', function () {
    $phone='1234556';
    $email='dario@mail.it';

    return view('guests.contacts', compact ('phone','email'));
});*/