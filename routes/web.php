<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\sessionController;
use GuzzleHttp\Middleware;

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
    return view('page.Home.home');
})->middleware('auth');

Route::get('/404', function () {
    return view('page.404.404');
})->middleware('auth');

Route::get('/guest', function () {
    return view('page.Home.home');
});

Route::get('/home', function () {
    return view('page.Home.home');
})->middleware('auth');

Route::get('/dijual', function () {
    return view('page.Dijual.dijual');
})->middleware('auth');

Route::get('/panduan', function () {
    return view('page.Panduan.panduan');
})->middleware('auth');

Route::get('/kpr', function () {
    return view('page.KPR.kpr');
})->middleware('auth');

Route::group(['prefix' => '/session'], function(){
    Route::get('/signout', [sessionController::class, 'signout']);

    Route::group(['prefix' => '/signin'], function(){
        Route::get('/', [sessionController:: class, 'signin'])->name('login')->middleware('guest');
        Route::post('/create', [sessionController:: class, 'postSignin']);
    });

    route::group(['prefix' => '/signup'], function(){
        Route::get('/', [sessionController:: class, 'signup'])->middleware('guest');
        Route::post('/create', [sessionController:: class, 'postSignup']);
    });
});
