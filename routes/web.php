<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SpecificationController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

    // Route::group(['prefix' => '/user'], function(){
    //     Route::get('/data', [UserController:: class, 'index']);
    //     Route::group(['prefix' => '/show'],function () {
    //         Route::get('/{user}',[UserController::class,'show']);
    //         Route::get('/edit/{User}',[UserController::class,'edit']);
    //         // Route::post('/update/{User}', [UserController:: class, 'update']);
    //     });
    //     // Route::get('/show/{User}',[UserController::class,'show']);
    //     Route::get('/create', [UserController:: class, 'create']);
    //     Route::post('/add', [UserController:: class, 'store']);
    //     // Route::get('/edit/{User}',[UserController::class,'edit']);
    //     Route::post('/update/{user}', [UserController:: class, 'update']);
    //     Route::get('/delete/{user}',[UserController::class,'destroy']);
    //     // Route::get('/search', [UserController::class,'search']);
    // });

    Route::group(['prefix' => '/develop'], function(){
        Route::get('/data', [DeveloperController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{developer}',[DeveloperController::class,'show']);
            Route::get('/edit/{developer}',[DeveloperController::class,'edit']);
            // Route::post('/update/{developer}', [DeveloperController:: class, 'update']);
        });
        // Route::get('/show/{developer}',[DeveloperController::class,'show']);
        Route::get('/create', [DeveloperController:: class, 'create']);
        Route::post('/add', [DeveloperController:: class, 'store']);
        // Route::get('/edit/{developer}',[DeveloperController::class,'edit']);
        Route::post('/update/{developer}', [DeveloperController:: class, 'update']);
        Route::get('/delete/{developer}',[DeveloperController::class,'destroy']);
        // Route::get('/search', [DeveloperController::class,'search']);
    });

    Route::group(['prefix' => '/agent'], function(){
        Route::get('/data', [AgentController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{agent}',[AgentController::class,'show']);
            Route::get('/edit/{agent}',[AgentController::class,'edit']);
            // Route::post('/update/{agent}', [AgentController:: class, 'update']);
        });
        // Route::get('/show/{agent}',[AgentController::class,'show']);
        Route::get('/create', [AgentController:: class, 'create']);
        Route::post('/add', [AgentController:: class, 'store']);
        // Route::get('/edit/{agent}',[AgentController::class,'edit']);
        Route::post('/update/{agent}', [AgentController:: class, 'update']);
        Route::get('/delete/{agent}',[AgentController::class,'destroy']);
        // Route::get('/search', [AgentController::class,'search']);
    });

    Route::group(['prefix' => '/unit'], function(){
        Route::get('/data', [UnitController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{unit}',[UnitController::class,'show']);
            Route::get('/edit/{unit}',[UnitController::class,'edit']);
            // Route::get('/update/{unit}',[UnitController::class,'update']);
        });
        // Route::get('/show/{unit}',[UnitController::class,'show']);
        Route::get('/create', [UnitController:: class, 'create']);
        Route::post('/add', [UnitController:: class, 'store']);
        // Route::get('/edit/{unit}',[UnitController::class,'edit']);
        Route::post('/update/{unit}', [UnitController:: class, 'update']);
        Route::get('/delete/{unit}',[UnitController::class,'destroy']);
        // Route::get('/search', [UnitController::class,'search']);
    });

    route::group(['prefix' => '/property'], function(){
        Route::get('/data', [PropertyController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{property}',[PropertyController::class,'show']);
            Route::get('/edit/{property}',[PropertyController::class,'edit']);
            // Route::post('/update/{property}', [PropertyController:: class, 'update']);
        });
        Route::get('/show/{property}',[PropertyController::class,'show']);
        Route::get('/create', [PropertyController:: class, 'create']);
        Route::post('/add', [PropertyController:: class, 'store']);
        // Route::get('/edit/{property}',[PropertyController::class,'edit']);
        Route::post('/update/{property}', [PropertyController:: class, 'update']);
        Route::get('/delete/{property}',[PropertyController::class,'destroy']);
        // Route::get('/search', [PropertyController::class,'search']);
    });

    route::group(['prefix' => '/spec'], function(){
        Route::get('/data', [SpecificationController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{specification}',[SpecificationController::class,'show']);
            Route::get('/edit/{specification}',[SpecificationController::class,'edit']);
            // Route::post('/update/{specification}', [SpecificationController:: class, 'update']);
        });
        Route::get('/show/{specification}',[SpecificationController::class,'show']);
        Route::get('/create', [SpecificationController:: class, 'create']);
        Route::post('/add', [SpecificationController:: class, 'store']);
        // Route::get('/edit/{specification}',[SpecificationController::class,'edit']);
        Route::post('/update/{specification}', [SpecificationController:: class, 'update']);
        Route::get('/delete/{specification}',[SpecificationController::class,'destroy']);
        // Route::get('/search', [SpecificationController::class,'search']);
    });

    route::group(['prefix' => '/type'], function(){
        Route::get('/data', [TypeController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{type}',[TypeController::class,'show']);
            Route::get('/edit/{type}',[TypeController::class,'edit']);
            // Route::post('/update/{type}', [TypeController:: class, 'update']);
        });
        Route::get('/show/{type}',[TypeController::class,'show']);
        Route::get('/create', [TypeController:: class, 'create']);
        Route::post('/add', [TypeController:: class, 'store']);
        // Route::get('/edit/{type}',[TypeController::class,'edit']);
        Route::post('/update/{type}', [TypeController:: class, 'update']);
        Route::get('/delete/{type}',[TypeController::class,'destroy']);
        // Route::get('/search', [TypeController::class,'search']);
    });

    route::group(['prefix' => '/guide'], function(){
        Route::get('/data', [GuideController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{guide}',[GuideController::class,'show']);
            Route::get('/edit/{guide}',[GuideController::class,'edit']);
            // Route::post('/update/{guide}', [GuideController:: class, 'update']);
        });
        Route::get('/show/{guide}',[GuideController::class,'show']);
        Route::get('/create', [GuideController:: class, 'create']);
        Route::post('/add', [GuideController:: class, 'store']);
        // Route::get('/edit/{guide}',[GuideController::class,'edit']);
        Route::post('/update/{guide}', [GuideController:: class, 'update']);
        Route::get('/delete/{guide}',[GuideController::class,'destroy']);
        // Route::get('/search', [GuideController::class,'search']);
    });
});