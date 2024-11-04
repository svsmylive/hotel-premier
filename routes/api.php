<?php

use App\Http\Controllers\BanquetController;
use App\Http\Controllers\ConferencesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/rooms', [RoomController::class, 'index']);
Route::get('/rooms/{id}', [RoomController::class, 'get']);

Route::get('/news', [NewsController::class, 'index']);

Route::get('/reviews', [ReviewsController::class, 'index']);
Route::post('/reviews/add', [ReviewsController::class, 'store']);

Route::post('/reserve/conferences', [ConferencesController::class, 'store']);

Route::post('/reserve/banquet', [BanquetController::class, 'store']);
