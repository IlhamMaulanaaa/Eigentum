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

Route::group(['prefix' => '/session'], function () {
    Route::get('/signout', [sessionController::class, 'signout']);

    Route::group(['prefix' => '/signin'], function () {
        Route::get('/', [sessionController::class, 'signin'])->name('login')->middleware('guest');
        Route::post('/create', [sessionController::class, 'postSignin']);
    });

    route::group(['prefix' => '/signup'], function () {
        Route::get('/', [sessionController::class, 'signup'])->middleware('guest');
        Route::post('/create', [sessionController::class, 'postSignup']);
    });
});
//  daftar agen dan developer
Route::group(['prefix' => '/signup'], function () {
    // Route::get('/agent', [registerController::class, 'agent'])->middleware('guest');
    // Route::get('/developer', [registerController::class, 'developer'])->middleware('guest');
    Route::get('/loginagent', function () {
        return view('auth.agent.signin');
    });
    Route::get('/logindeveloper', function () {
        return view('auth.developer.signin');
    });
});

// login agen dan developer
Route::group(['prefix' => '/signin'], function () {
    // Route::get('/agent', [registerController::class, 'agent'])->middleware('guest');
    // Route::get('/developer', [registerController::class, 'developer'])->middleware('guest');
    Route::get('/registerdeveloper', function () {
        return view('auth.developer.signup');
    });
    Route::get('/registeragent', function () {
        return view('auth.agent.signup');
    });
});


Route::get('/uploadproperti ', function () {
    return view('page.properti.upload');
});

// change property -> jadinya di buat overlay langsung upload property
// Route::get('/choiceproperty', function () {
//     return view('page.properti.change');
// });
Route::get('/create', function () {
    return view('page.unit.create');
});
Route::get('/unit', function () {
    return view('page.unit.unit');
});
Route::get('/main', function () {
    return view('page.unit.main');
});
