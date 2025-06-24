<?php

use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;


Route::get('/', [RoomController::class, 'index']);

Route::view('/roman-holidays', 'roman_holidays');

Route::get('/booking/', function () {
    return view('booking');
})->name('booking');
