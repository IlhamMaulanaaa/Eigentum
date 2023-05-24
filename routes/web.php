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
});

Route::get('/guest', function () {
    return view('page.Home.home');
})->middleware('auth');

Route::get('/home', function () {
    return view('page.Home.home');
});

Route::get('/404', function () {
    return view('page.404.404');
});


Route::get('/dijual', function () {
    return view('page.Dijual.dijual');
});

Route::get('/panduan', function () {
    return view('page.Panduan.panduan');
});

Route::get('/kpr', function () {
    return view('page.KPR.kpr');
});

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

Route::get('/loginagent', function () {
    return view('auth.agent.signin');
});
Route::get('/registeragent', function () {
    return view('auth.agent.signup');
});