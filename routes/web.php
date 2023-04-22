<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\sessionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.main');
});

Route::get('/home', function () {
    return view('layout.main');
});


route::group(['prefix' => '/register'], function () {
    Route::get('/all', [registerController::class, 'index'])->middleware('guest');
    Route::post('/create', [registerController::class, 'store']);
});
route::group(['prefix' => '/login'], function () {
    Route::get('/all', [loginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/create', [loginController::class, 'auth']);
});
Route::get('/logout', [sessionController::class, 'logout']);

