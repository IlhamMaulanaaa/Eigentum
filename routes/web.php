<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SpecificationController;
use App\Http\Controllers\StatusController;
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
| Here is where you can register web Routes for your application. These
| Routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('page.Home.home');
});

// Route::get('/admin', function () {
//     return view('admin.layout.main');
// });

Route::group(['prefix' => '/session'], function(){
    Route::get('/signout', [SessionController::class, 'signout']);

    Route::group(['prefix' => '/signin'], function(){
        Route::get('/', [SessionController:: class, 'signin'])->name('login')->middleware('guest');
        Route::post('/create', [SessionController:: class, 'postSignin']);
    });

    Route::group(['prefix' => '/signup'], function(){
        Route::get('/', [SessionController:: class, 'signup'])->middleware('guest');
        Route::post('/create', [SessionController:: class, 'postSignup']);
    });
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

Route::get('/detailunit', function () {
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
})->middleware('auth');

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
Route::group(['prefix' => '/signin'], function () {
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
Route::group(['prefix' => '/signup'], function () {
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

Route::group(['prefix' => '/admin'], function () {
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

    Route::group(['prefix' => '/property'], function(){
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

    Route::group(['prefix' => '/specification'], function(){
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

    Route::group(['prefix' => '/type'], function(){
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

    Route::group(['prefix' => '/guide'], function(){
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

    Route::group(['prefix' => '/location'], function(){
        Route::get('/data', [LocationController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{location}',[LocationController::class,'show']);
            Route::get('/edit/{location}',[LocationController::class,'edit']);
        });
        Route::get('/create', [LocationController:: class, 'create']);
        Route::post('/add', [LocationController:: class, 'store']);
        Route::post('/update/{location}', [LocationController:: class, 'update']);
        Route::get('/delete/{location}',[LocationController::class,'destroy']);
    });

    Route::group(['prefix' => '/status'], function(){
        Route::get('/data', [StatusController:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{status}',[StatusController::class,'show']);
            Route::get('/edit/{status}',[StatusController::class,'edit']);
        });
        Route::get('/create', [StatusController:: class, 'create']);
        Route::post('/add', [StatusController:: class, 'store']);
        Route::post('/update/{status}', [StatusController:: class, 'update']);
        Route::get('/delete/{status}',[StatusController::class,'destroy']);
    });

    Route::get("/dashboard", [DashboardController::class, 'index']);
});