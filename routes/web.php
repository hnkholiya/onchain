<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
Route::get('/', function () {
    return view('welcome');
});



Route::get('/upload', [DocumentController::class, 'index']);

Route::post('/upload', [DocumentController::class, 'upload']);

Route::get('/verify', [DocumentController::class, 'verifyPage']);

Route::post('/verify', [DocumentController::class, 'verifyDocument']);