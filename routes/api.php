<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ArtistController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//artists
Route::get('/artists', [ArtistController::class, 'list'])->middleware('auth:sanctum');
