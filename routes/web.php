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

Route::get('/404', function () {
    return view('page.404.404');
});

Route::get('/detailagent', function () {
    return view('page.DetailAgent.all');
});

Route::get('/dashboard-develop', function () {
    return view('page.DetailDeveloper.all');
});

Route::get('/nav', function () {
    return view('partial.nav');
});

Route::get('/detailproperty', function () {
    return view('page.DetailProperty.all');
});

Route::get('/propertibaru', function () {
    return view('page.PropertiBaru.propertibaru');
});

Route::get('/disewa', function () {
    return view('page.Disewa.disewa');
});

Route::get('/cariagen', function () {
    return view('page.CariAgen.cariagen');
});

Route::get('/guest', function () {
    return view('page.Home.home');
});

Route::get('/home', function () {
    return view('page.Home.home');
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