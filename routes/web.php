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
    return view('index');
});


Route::get('/rooms/', function () {
    return view('rooms');
})->name('rooms');

Route::get('/booking/', function () {
    return view('booking');
})->name('booking');


Route::get('/conference_rooms/', function () {
    return view('conference_rooms');
})->name('conference_rooms');

Route::get('/pool_gym/', function () {
    return view('pool_gym');
})->name('pool_gym');

Route::get('/restaurant/', function () {
    return view('restaurant');
})->name('restaurant');


Route::get('/park-krasnodar/', function () {
    return view('park-krasnodar');
})->name('park-krasnodar');


Route::get('/about/', function () {
    return view('about');
})->name('about');


Route::get('/news/', function () {
    return view('news');
})->name('news');
