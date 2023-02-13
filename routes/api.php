<?php

use App\Http\Controllers\HeartBeat\DetailsHeartBeatController;
use App\Http\Controllers\HeartBeat\StoreHeartBeatController;
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

Route::name('heartBeat.')->prefix('heartBeat')->group(function () {
    Route::get('/{id}', DetailsHeartBeatController::class)->name('details');
    Route::post('/', StoreHeartBeatController::class)->name('store');
});
