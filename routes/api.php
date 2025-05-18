<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [
    'uses' => 'App\Http\Controllers\AuthController@register',
])->name('register');

Route::post('/login', [
    'uses' => 'App\Http\Controllers\AuthController@login',
])->name('login');


// Poop count
Route::post('/increment-poop', [
    'uses' => 'App\Http\Controllers\PoopController@incrementPoop',
])->middleware('auth:sanctum');

Route::get('/get-poop-by-local/{local_id}', [
    'uses' => 'App\Http\Controllers\PoopController@getPoopByLocal',
])->middleware('auth:sanctum');

Route::get('/get-poop-by-user/{user_id}', [
    'uses' => 'App\Http\Controllers\PoopController@getPoopByUser',
])->middleware('auth:sanctum');

Route::get('/places', [
    'uses' => 'App\Http\Controllers\LocalController@index',
])->middleware('auth:sanctum');

Route::get('/random-sentence', [\App\Http\Controllers\SentenceController::class, 'random']);
