<?php

use App\Http\Controllers\Api\MessageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(MessageController::class)->group(function () {
    Route::get('/messages', 'index');
    Route::post('/message','store');
    Route::get('/message/{id}','show');
    Route::put('/message/{id}','update');
    Route::delete('/message/{id}','destroy');
});
