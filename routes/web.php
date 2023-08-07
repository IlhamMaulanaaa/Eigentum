<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\IndoregionController;
use App\Http\Controllers\FilePreviewController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SpecificationController;
use App\Http\Controllers\PaymentCallbackController;
use App\Http\Controllers\SubscribeController;
use App\Models\Subscribe;

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

Route::get('/', [AuthController::class, 'index'])->middleware('guest');
Route::get('/beranda', [UnitController::class, 'homeunit']);
Route::post('/register', [AdminController::class, 'register']);
Route::get('/create', [AuthController::class, 'login']);
Route::get('/create', [AuthController::class, 'register']);


Route::get('/navbar', function () {
    return view('layout.partial.nav');
});

Route::get('/footer', function () {
    return view('layout.partial.footer');
});

// authentication



Route::group(['prefix' => '/session'], function () {
    Route::get('/signout', [SessionController::class, 'signout']);

    Route::group(['prefix' => '/signin'], function () {
        Route::get('/', [SessionController::class, 'signin'])->name('login')->middleware('guest');
        Route::post('/create', [SessionController::class, 'postSignin']);
    });

    Route::group(['prefix' => '/signup'], function () {
        Route::get('/', [SessionController::class, 'signup'])->middleware('guest');
        Route::post('/create', [SessionController::class, 'postSignup']);
    });
    return view('pages.page.home');
});

Route::group(['prefix' => '/session'], function () {

    Route::group(['prefix' => '/auth'], function () {

        Route::group(['prefix' => '/user'], function () {
            Route::get('/signout', [SessionController::class, 'signoutuser']);

            Route::group(['prefix' => '/signin'], function () {
                Route::get('/', [SessionController::class, 'signinUser'])->name('loginUser')->middleware('guest');
                Route::post('/create', [AuthController::class, 'login']);
            });
            route::group(['prefix' => '/signup'], function () {
                Route::get('/', [SessionController::class, 'signupuser'])->middleware('guest');
                Route::post('/create', [SessionController::class, 'postSignupUser']);
            });
        });

        Route::group(['prefix' => '/developer'], function () {
            Route::get('/signout', [SessionController::class, 'signoutuser']);

            Route::group(['prefix' => '/signin'], function () {
                Route::get('/', [DeveloperController::class, 'SigninDeveloper']);
                // Route::post('/create', [AuthController::class, 'postSignin']);
            });
            Route::group(['prefix' => '/signup'], function () {
                Route::get('/', [DeveloperController::class, 'SignupDeveloper']);
                Route::post('/create', [DeveloperController::class, 'storeFront']);
            });
        });

        Route::group(['prefix' => '/agent'], function () {
            Route::get('/signout', [SessionController::class, 'signoutuser']);

            Route::group(['prefix' => '/signin'], function () {
                Route::get('/', [AgentController::class, 'signinAgent']);
                Route::post('/create', [AgentController::class, 'postSigninAgent']);
            });
            Route::group(['prefix' => '/signup'], function () {
                Route::get('/', [AgentController::class, 'signup']);
                Route::post('/create', [AgentController::class, 'storeFront']);
            });
        });
    });
});
// Route::middleware(['checkrole'])->group(function () {
// developer
// });
Route::middleware(['auth', 'IsDeveloper'])->group(function () {
    Route::group(['prefix' => '/developer'], function () {
        Route::get('/dashboard', [SessionController::class, 'anu']);
        Route::get('/detail', function () {
            return view('pages.Developer.detail');
        });
    });
});
// agent
Route::middleware(['auth', 'IsAgent'])->group(function () {
    Route::group(['prefix' => '/agent'], function () {
        Route::get('/dashboard', function () {
            return view('pages.Agent.dashboard');
        });
    });
});


Route::get('/home', [UnitController::class, 'homeunit']);

// pages
Route::group(['prefix' => '/pages'], function () {

    Route::get('/notfound', function () {
        return view('pages.page.notfound');
    });

    Route::get('/searchagent', function () {
        return view('pages.page.searchAgent');
    });

    Route::get('/newproperty', function () {
        return view('pages.page.newProperty');
    });

    Route::get('/rent', function () {
        return view('pages.page.rent');
    });


    Route::get('/sell', function () {
        return view('pages.page.sell');
    });

    Route::get('/guide', [GuideController::class, 'guide']);
    Route::get('/kpr', function () {
        return view('pages.page.kpr');
    });
    Route::get('/langganan', function () {
        return view('pages.page.subscribe');
    });
    Route::get('/notifikasi', function () {
        return view('pages.page.notification');
    });
});


Route::get('/filterproperti', function () {
    return view('pages.page.propertyfilter');
});

Route::get('/konfirmasipembayaran', function () {
    return view('pages.page.confirmpayment');
});

Route::get('/profile', function () {
    return view('pages.page.profile');
});

Route::get('/favorite', [FavoriteController::class, 'index']);

Route::get('/detailpanduan', function () {
    return view('pages.page.detailguide');
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

    Route::get('/uploadimage', function () {
        return view('pages.unit.uploadimage');
    });

    Route::get('/detail', function () {
        return view('pages.unit.detail');
    });
});

//  admin

// Route::group(['prefix' => '/admin'], function () {
//     Route::group(['prefix' => '/session'], function () {
//         Route::get('/signout', [SessionController::class, 'signout']);

//         Route::group(['prefix' => '/signin'], function () {
//             Route::get('/', [SessionController::class, 'signin'])->name('login')->middleware('guest');
//             Route::post('/create', [SessionController::class, 'postSignin']);
//         });

//         route::group(['prefix' => '/signup'], function () {
//             Route::get('/', [SessionController::class, 'signup'])->middleware('guest');
//             Route::post('/create', [SessionController::class, 'postSignup']);
//         });
//     });
// });


Route::middleware(['auth', 'IsAdmin:admin'])->group(function () {
    Route::group(['prefix' => '/admin'], function () {

        Route::get('/', [AdminController::class, 'index']);
        Route::get("/dashboard", [DashboardController::class, 'index']);


        Route::resource('customer', CustomerController::class);
        Route::resource('agent', AgentController::class);
        Route::resource('developer', DeveloperController::class);
        Route::resource('property', PropertyController::class);
        Route::get('/property/create/{developerId}', [PropertyController::class, 'create'])->name('propertyid.create');
        Route::post('/property/{developerId}', [PropertyController::class, 'store'])->name('propertyid.store');
        Route::resource('unit', UnitController::class);
        Route::get('/unit/create/{propertyId}', [UnitController::class, 'create'])->name('unitid.create');
        Route::post('/unit/{propertyId}', [UnitController::class, 'store'])->name('unitid.store');
        Route::resource('specification', SpecificationController::class);
        Route::resource('type', TypeController::class);
        Route::resource('guide', GuideController::class);
        Route::resource('status', StatusController::class);
        Route::resource('subscribe', SubscribeController::class);
        Route::resource('order', OrderController::class);

        Route::get('/pdf-preview/{file}', [FilePreviewController::class, 'show'])->name('pdf.preview');
    });
});

Route::get('regency', [IndoregionController::class, 'getregency'])->name('get.regency');
Route::get('districts', [IndoregionController::class, 'getdistricts'])->name('get.districts');
Route::get('villages', [IndoregionController::class, 'getvillages'])->name('get.villages');

Route::post('favorite-add/{id}', [FavoriteController::class, 'store'])->name('favorite.add');
Route::delete('favorite-remove/{id}', [FavoriteController::class, 'destroy'])->name('favorite.remove');
Route::post('/payments/midtrans-notification', [PaymentCallbackController::class, 'receive']);
