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

/*Route::get('/', function () {
    return view('forum');
});*/

Route::get('/', \App\Http\Controllers\ThreadController::class, 'index');

Route::get('/inloggen', function () {
    return view('inloggen');
});

Route::get('/aanmelden', function () {
    return view('aanmelden');
});

Route::get('/dev/users', \App\Http\Controllers\AllUsersController::class);

Route::get('/threads', [ App\Http\Controllers\ThreadController::class, 'index']);

Route::post('/threads/create', [ App\Http\Controllers\ThreadController::class, 'store']);

Route::post('/create-user', [ \App\Http\Controllers\AllUsersController::class, 'create']);
Route::post('/login-user', [ \App\Http\Controllers\AllUsersController::class, 'login']);
