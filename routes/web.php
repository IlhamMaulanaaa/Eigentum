<?php

use App\Http\Controllers\Back\AgentController as agentAdmin;
use App\Http\Controllers\Back\CustomerController as customerAdmin;
use App\Http\Controllers\Back\DeveloperController as developerAdmin;
use App\Http\Controllers\Back\GuideController as guideAdmin;
use App\Http\Controllers\Back\LocationController as locationAdmin;
use App\Http\Controllers\Back\PropertyController as propertyAdmin;
use App\Http\Controllers\Back\SessionController as sessionAdmin;
use App\Http\Controllers\Back\SpecificationController as specificationAdmin;
use App\Http\Controllers\Back\StatusController as statusAdmin;
use App\Http\Controllers\Back\TypeController as typeAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Back\DashboardController as dashboardAdmin;
use App\Http\Controllers\Back\UnitController as unitAdmin;

use App\Http\Controllers\Front\AgentController;
use App\Http\Controllers\Front\CustomerController;
use App\Http\Controllers\Front\DeveloperController;
use App\Http\Controllers\Front\GuideController;
use App\Http\Controllers\Front\LocationController;
use App\Http\Controllers\Front\PropertyController;
use App\Http\Controllers\Front\SessionController;
use App\Http\Controllers\Front\SpecificationController;
use App\Http\Controllers\Front\StatusController;
use App\Http\Controllers\Front\TypeController;
use App\Http\Controllers\Front\DashboardController;
use App\Http\Controllers\Front\UnitController;

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
    return view('pages.page.home');
});


// authentication

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
    return view('pages.page.home');
});

Route::group(['prefix' => '/session'], function () {
    Route::get('/signout', [SessionController::class, 'signout']);

    Route::group(['prefix' => '/signin'], function () {
        Route::get('/', [SessionController::class, 'signin'])->name('login')->middleware('guest');
        Route::post('/create', [SessionController::class, 'postSignin']);
    });

    route::group(['prefix' => '/signup'], function () {
        Route::get('/', [SessionController::class, 'signup'])->middleware('guest');
        Route::post('/create', [SessionController::class, 'postSignup']);
    });
});

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
// developer
Route::group(['prefix' => '/developer'], function () {
    Route::get('/dashboard', function () {
        return view('pages.Developer.dashboard');
    });
});
// agent
Route::group(['prefix' => '/agent'], function () {
    Route::get('/dashboard', function () {
        return view('pages.Agent.dashboard');
    });
});
// pages
Route::group(['prefix' => '/pages'], function () {
    Route::get('/searchagent',[AgentController::class, 'index']);
    
    Route::get('/notfound', function () {
        return view('pages.page.notfound');
    });
    
    Route::get('/newproperty', function () {
        return view('pages.page.newProperty');
    });
    
    Route::get('/rent', function () {
        return view('pages.page.rent');
    });
    
    Route::get('/home', function () {
        return view('pages.page.home');
    });
    
    Route::get('/sell', function () {
        return view('pages.page.sell');
    });
    
    Route::get('/guide', function () {
        return view('pages.page.guide');
    });
    Route::get('/kpr', function () {
    return view('pages.page.kpr');
    });
});

// property
Route::group(['prefix' => '/property'], function () {
    Route::get('/upload ', function () {
        return view('pages.property.create');
    });

    Route::get('/detail', function () {
        return view('pages.property.detail');
    });

    Route::get('/choice', function () {
        return view('pages.property.choice');
    });
});
// unit
Route::group(['prefix' => '/unit'], function () {
    Route::get('/upload', function () {
        return view('pages.unit.create');
    });

    Route::get('/detail', function () {
        return view('pages.unit.detail');
    });
});







//  admin

Route::group(['prefix' => '/admin'], function () {
    Route::group(['prefix' => '/session'], function () {
        Route::get('/signout', [sessionAdmin::class, 'signout']);
    
        Route::group(['prefix' => '/signin'], function () {
            Route::get('/', [sessionAdmin::class, 'signin'])->name('login')->middleware('guest');
            Route::post('/create', [sessionAdmin::class, 'postSignin']);
        });
    
        route::group(['prefix' => '/signup'], function () {
            Route::get('/', [sessionAdmin::class, 'signup'])->middleware('guest');
            Route::post('/create', [sessionAdmin::class, 'postSignup']);
        });
    });
});

Route::group(['prefix' => '/admin','middleware' => 'auth'], function(){
    
    
    Route::get('/', [AdminController:: class, 'index']);

    Route::group(['prefix' => '/customer'], function(){
        Route::get('/data', [customerAdmin:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{customer}',[customerAdmin::class,'show']);
            Route::get('/edit/{customer}',[customerAdmin::class,'edit']);
        });
        Route::get('/create', [customerAdmin:: class, 'create']);
        Route::post('/add', [customerAdmin:: class, 'store']);
        Route::post('/update/{customer}', [customerAdmin:: class, 'update']);
        Route::get('/delete/{customer}',[customerAdmin::class,'destroy']);
    });

    Route::group(['prefix' => '/developer'], function(){
        Route::get('/data', [developerAdmin:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{developer}',[developerAdmin::class,'show']);
            Route::get('/edit/{developer}',[developerAdmin::class,'edit']);
        });
        Route::get('/create', [developerAdmin:: class, 'create']);
        Route::post('/add', [developerAdmin:: class, 'store']);
        Route::post('/update/{developer}', [developerAdmin:: class, 'update']);
        Route::get('/delete/{developer}',[developerAdmin::class,'destroy']);
    });

    Route::group(['prefix' => '/agent'], function(){
        Route::get('/data', [agentAdmin:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{agent}',[agentAdmin::class,'show']);
            Route::get('/edit/{agent}',[agentAdmin::class,'edit']);
        });
        Route::get('/create', [agentAdmin:: class, 'create']);
        Route::post('/add', [agentAdmin:: class, 'store']);
        Route::post('/update/{agent}', [agentAdmin:: class, 'update']);
        Route::get('/delete/{agent}',[agentAdmin::class,'destroy']);
    });

    Route::group(['prefix' => '/unit'], function(){
        Route::get('/data', [unitAdmin:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{unit}',[unitAdmin::class,'show']);
            Route::get('/edit/{unit}',[unitAdmin::class,'edit']);
        });
        Route::get('/create', [unitAdmin:: class, 'create']);
        Route::post('/add', [unitAdmin:: class, 'store']);
        Route::post('/update/{unit}', [unitAdmin:: class, 'update']);
        Route::get('/delete/{unit}',[unitAdmin::class,'destroy']);
    });

    Route::group(['prefix' => '/property'], function(){
        Route::get('/data', [propertyAdmin:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{property}',[propertyAdmin::class,'show']);
            Route::get('/edit/{property}',[propertyAdmin::class,'edit']);
        });
        Route::get('/create', [propertyAdmin:: class, 'create']);
        Route::post('/add', [propertyAdmin:: class, 'store']);
        Route::post('/update/{property}', [propertyAdmin:: class, 'update']);
        Route::get('/delete/{property}',[propertyAdmin::class,'destroy']);
    });

    Route::group(['prefix' => '/specification'], function(){
        Route::get('/data', [specificationAdmin:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{specification}',[specificationAdmin::class,'show']);
            Route::get('/edit/{specification}',[specificationAdmin::class,'edit']);
        });
        Route::get('/create', [specificationAdmin:: class, 'create']);
        Route::post('/add', [specificationAdmin:: class, 'store']);
        Route::post('/update/{specification}', [specificationAdmin:: class, 'update']);
        Route::get('/delete/{specification}',[specificationAdmin::class,'destroy']);
    });

    Route::group(['prefix' => '/type'], function(){
        Route::get('/data', [typeAdmin:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{type}',[typeAdmin::class,'show']);
            Route::get('/edit/{type}',[typeAdmin::class,'edit']);
        });
        Route::get('/create', [typeAdmin:: class, 'create']);
        Route::post('/add', [typeAdmin:: class, 'store']);
        Route::post('/update/{type}', [typeAdmin:: class, 'update']);
        Route::get('/delete/{type}',[typeAdmin::class,'destroy']);
    });

    Route::group(['prefix' => '/guide'], function(){
        Route::get('/data', [guideAdmin:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{guide}',[guideAdmin::class,'show']);
            Route::get('/edit/{guide}',[guideAdmin::class,'edit']);
        });
        Route::get('/create', [guideAdmin:: class, 'create']);
        Route::post('/add', [guideAdmin:: class, 'store']);
        Route::post('/update/{guide}', [guideAdmin:: class, 'update']);
        Route::get('/delete/{guide}',[guideAdmin::class,'destroy']);
    });

    Route::group(['prefix' => '/location'], function(){
        Route::get('/data', [locationAdmin:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{location}',[locationAdmin::class,'show']);
            Route::get('/edit/{location}',[locationAdmin::class,'edit']);
        });
        Route::get('/create', [locationAdmin:: class, 'create']);
        Route::post('/add', [locationAdmin:: class, 'store']);
        Route::post('/update/{location}', [locationAdmin:: class, 'update']);
        Route::get('/delete/{location}',[locationAdmin::class,'destroy']);
    });

    Route::group(['prefix' => '/status'], function(){
        Route::get('/data', [statusAdmin:: class, 'index']);
        Route::group(['prefix' => '/show'],function () {
            Route::get('/{status}',[statusAdmin::class,'show']);
            Route::get('/edit/{status}',[statusAdmin::class,'edit']);
        });
        Route::get('/create', [statusAdmin:: class, 'create']);
        Route::post('/add', [statusAdmin:: class, 'store']);
        Route::post('/update/{status}', [statusAdmin:: class, 'update']);
        Route::get('/delete/{status}',[statusAdmin::class,'destroy']);
    });

    Route::get("/dashboard", [dashboardAdmin::class, 'index']);
});
