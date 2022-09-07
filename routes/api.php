<?php

use App\Http\Controllers\APIControllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getdata', [APIController::class, 'getData']);
Route::post('postdata', [APIController::class, 'postData']);

Route::get('getvoltage', [APIController::class, 'getVoltage']);
Route::get('getcurrent', [APIController::class, 'getCurrent']);
Route::get('getpower', [APIController::class, 'getPower']);
Route::get('getfrequency', [APIController::class, 'getFrequency']);
Route::get('getpf', [APIController::class, 'getPf']);
Route::get('getenergy', [APIController::class, 'getEnergy']);