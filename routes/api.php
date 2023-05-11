<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SpecificationController;
use Illuminate\Http\Request;
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

Route::group(['prefix' => 'unit'], function () {
    Route::get('/data',[UnitController::class, 'index']);
    Route::post('/store',[UnitController::class, 'store']);
    Route::post('/update/{id}',[UnitController::class, 'update']);
    Route::get('/show/{id}',[UnitController::class, 'show']);
    Route::get('/delete/{id}',[UnitController::class, 'destroy']);
});

Route::group(['prefix' => 'property'], function () {
    Route::get('/data',[PropertyController::class, 'index']);
    Route::post('/store',[PropertyController::class, 'store']);
    Route::post('/update/{id}',[PropertyController::class, 'update']);
    Route::get('/show/{id}',[PropertyController::class, 'show']);
    Route::get('/delete/{id}',[PropertyController::class, 'destroy']);
});

Route::group(['prefix' => 'spesification'], function () {
    Route::get('/data',[SpecificationController::class, 'index']);
    Route::post('/store',[SpecificationController::class, 'store']);
    Route::post('/update/{id}',[SpecificationController::class, 'update']);
    Route::get('/show/{id}',[SpecificationController::class, 'show']);
    Route::get('/delete/{id}',[SpecificationController::class, 'destroy']);
});

Route::group(['prefix' => 'type'], function () {
    Route::get('/data',[TypeController::class, 'index']);
    Route::post('/store',[TypeController::class, 'store']);
    Route::post('/update/{id}',[TypeController::class, 'update']);
    Route::get('/show/{id}',[TypeController::class, 'show']);
    Route::get('/delete/{id}',[TypeController::class, 'destroy']);
});

Route::group(['prefix' => 'developer'], function () {
    Route::get('/data',[DeveloperController::class, 'index']);
    Route::post('/store',[DeveloperController::class, 'store']);
    Route::post('/update/{id}',[DeveloperController::class, 'update']);
    Route::get('/show/{id}',[DeveloperController::class, 'show']);
    Route::get('/delete/{id}',[DeveloperController::class, 'destroy']);
});

Route::group(['prefix' => 'agent'], function () {
    Route::get('/data',[AgentController::class, 'index']);
    Route::post('/store',[AgentController::class, 'store']);
    Route::post('/update/{id}',[AgentController::class, 'update']);
    Route::get('/show/{id}',[AgentController::class, 'show']);
    Route::get('/delete/{id}',[AgentController::class, 'destroy']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


