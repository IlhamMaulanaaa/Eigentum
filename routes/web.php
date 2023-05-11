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

Route::get('/kpr', function () {
    return view('page.KPR.kpr');
});

route::group(['prefix' => '/register'], function () {
    Route::get('/all', [registerController::class, 'index']);
    Route::post('/create', [registerController::class, 'store']);
});
route::group(['prefix' => '/login'], function () {
    Route::get('/all', [loginController::class, 'index'])->name('login');
    Route::post('/create', [loginController::class, 'auth']);
});
Route::get('/logout', [sessionController::class, 'logout']);

Route::post('login/{provider}/callback', 'App\Http\Controllers\loginController@handleCallback');
