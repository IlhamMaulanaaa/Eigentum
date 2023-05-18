<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dijual', function () {
    return view('layout.main');
});

Route::get('/disewa', function () {
    return view('layout.main');
});

Route::get('/propertibaru', function () {
    return view('layout.main');
});
Route::get('/panduan', function () {
    return view('layout.main');
});
Route::get('/kpr', function () {
    return view('layout.main');
});