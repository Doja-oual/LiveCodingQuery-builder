<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/query-builder', [BookController::class, 'queryBuilder']);
Route::get('/eloquent', [BookController::class, 'eloquent']);
Route::get('/', function () {
    return view('welcome');
});
