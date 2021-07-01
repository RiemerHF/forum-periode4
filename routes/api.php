<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiThreadController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/threads', [ App\Http\Controllers\ThreadController::class, 'index']);
//Route::post('/threads/create', [ ApiThreadController::class, 'store']);
Route::post('/threads/create', [ App\Http\Controllers\ThreadController::class, 'store']);
