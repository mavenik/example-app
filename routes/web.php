<?php

use Illuminate\Support\Facades\Route;
use Practicals\Song;

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
    return view('welcome');
});

Route::get('/veggies', function () {
    return view('veggies');
});

Route::get('/veggies/{veggieName}', function (string $veggieName) {
    return $veggieName;
})->whereIn('veggieName', ['baigan', 'bhindi', 'aaloo', 'gobhi']);

Route::get('/songs', function () {
  $song = new Song();
  $song->setTitle("With You");
  $song->setArtist("A P Dhillon");

  return view('songs', [ 'song' => $song ]);
});
