<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SpecificationController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UnitController;

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
    return view('welcome');
})->middleware('auth');

// Route::get('/admin', function () {
//     return view('admin.layout.main');
// });

Route::group(['prefix' => '/session'], function(){
    Route::get('/signout', [SessionController::class, 'signout']);

    Route::group(['prefix' => '/signin'], function(){
        Route::get('/', [SessionController:: class, 'signin'])->name('login')->middleware('guest');
        Route::post('/create', [SessionController:: class, 'postSignin']);
    });

    route::group(['prefix' => '/signup'], function(){
        Route::get('/', [SessionController:: class, 'signup'])->middleware('guest');
        Route::post('/create', [SessionController:: class, 'postSignup']);
    });
});

Route::group(['prefix' => '/admin','middleware' => 'auth'], function(){
    
    Route::get('/', [AdminController:: class, 'index']);

    Route::group(['prefix' => '/customer'], function(){
        Route::get('/data', [CustomerController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{customer}',[CustomerController::class,'show']);
            Route::get('/edit/{customer}',[CustomerController::class,'edit']);
        });
        Route::get('/create', [CustomerController:: class, 'create']);
        Route::post('/add', [CustomerController:: class, 'store']);
        Route::post('/update/{customer}', [CustomerController:: class, 'update']);
        Route::get('/delete/{customer}',[CustomerController::class,'destroy']);
    });

    Route::group(['prefix' => '/developer'], function(){
        Route::get('/data', [DeveloperController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{developer}',[DeveloperController::class,'show']);
            Route::get('/edit/{developer}',[DeveloperController::class,'edit']);
        });
        Route::get('/create', [DeveloperController:: class, 'create']);
        Route::post('/add', [DeveloperController:: class, 'store']);
        Route::post('/update/{developer}', [DeveloperController:: class, 'update']);
        Route::get('/delete/{developer}',[DeveloperController::class,'destroy']);
    });

    Route::group(['prefix' => '/agent'], function(){
        Route::get('/data', [AgentController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{agent}',[AgentController::class,'show']);
            Route::get('/edit/{agent}',[AgentController::class,'edit']);
        });
        Route::get('/create', [AgentController:: class, 'create']);
        Route::post('/add', [AgentController:: class, 'store']);
        Route::post('/update/{agent}', [AgentController:: class, 'update']);
        Route::get('/delete/{agent}',[AgentController::class,'destroy']);
    });

    Route::group(['prefix' => '/unit'], function(){
        Route::get('/data', [UnitController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{unit}',[UnitController::class,'show']);
            Route::get('/edit/{unit}',[UnitController::class,'edit']);
        });
        Route::get('/create', [UnitController:: class, 'create']);
        Route::post('/add', [UnitController:: class, 'store']);
        Route::post('/update/{unit}', [UnitController:: class, 'update']);
        Route::get('/delete/{unit}',[UnitController::class,'destroy']);
    });

    route::group(['prefix' => '/property'], function(){
        Route::get('/data', [PropertyController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{property}',[PropertyController::class,'show']);
            Route::get('/edit/{property}',[PropertyController::class,'edit']);
        });
        Route::get('/create', [PropertyController:: class, 'create']);
        Route::post('/add', [PropertyController:: class, 'store']);
        Route::post('/update/{property}', [PropertyController:: class, 'update']);
        Route::get('/delete/{property}',[PropertyController::class,'destroy']);
    });

    route::group(['prefix' => '/specification'], function(){
        Route::get('/data', [SpecificationController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{specification}',[SpecificationController::class,'show']);
            Route::get('/edit/{specification}',[SpecificationController::class,'edit']);
        });
        Route::get('/create', [SpecificationController:: class, 'create']);
        Route::post('/add', [SpecificationController:: class, 'store']);
        Route::post('/update/{specification}', [SpecificationController:: class, 'update']);
        Route::get('/delete/{specification}',[SpecificationController::class,'destroy']);
    });

    route::group(['prefix' => '/type'], function(){
        Route::get('/data', [TypeController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{type}',[TypeController::class,'show']);
            Route::get('/edit/{type}',[TypeController::class,'edit']);
        });
        Route::get('/create', [TypeController:: class, 'create']);
        Route::post('/add', [TypeController:: class, 'store']);
        Route::post('/update/{type}', [TypeController:: class, 'update']);
        Route::get('/delete/{type}',[TypeController::class,'destroy']);
    });

    route::group(['prefix' => '/guide'], function(){
        Route::get('/data', [GuideController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{guide}',[GuideController::class,'show']);
            Route::get('/edit/{guide}',[GuideController::class,'edit']);
        });
        Route::get('/create', [GuideController:: class, 'create']);
        Route::post('/add', [GuideController:: class, 'store']);
        Route::post('/update/{guide}', [GuideController:: class, 'update']);
        Route::get('/delete/{guide}',[GuideController::class,'destroy']);
    });
        Route::get("/dashboard", [DashboardController::class, 'index']);
});