<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\IndoregionController;
use App\Http\Controllers\FilePreviewController;
use App\Http\Controllers\SpecificationController;
use App\Http\Controllers\PaymentCallbackController;
use App\Http\Controllers\ProviderController;
use Illuminate\Routing\RouteGroup;

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


// Route::middleware(['auth', 'IsAgent:agent'])->group(function () {
//     Route::get('/unit/{id}/transaction', 'TransactionController@initiateTransaction')->name('transaction.initiate');
// });

// Route::post('/unit/{unitId}/submit-offer', [AgentController::class, 'submitOffer'])->name('offer.submit');
// Route::post('/developer/accept/{unitId}', [AgentController::class, 'acceptOffer'])->name('accept.unit');
// Route::post('/developer/reject/{unitId}', [AgentController::class, 'rejectOffer'])->name('reject.unit');

Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login.index');
    Route::post('/createL', [AuthController::class, 'login']); //post login
    Route::post('/createR', [AuthController::class, 'register']); //post register

    Route::group(['prefix' => '/session'], function () {
        Route::group(['prefix' => '/auth'], function () {
            //user
            Route::group(['prefix' => '/user'], function () {
                Route::group(['prefix' => '/signin'], function () {
                    Route::get('/', [SessionController::class, 'signinUser'])->name('signin.user');
                    Route::post('/create', [AuthController::class, 'login']);
                });
                route::group(['prefix' => '/signup'], function () {
                    Route::get('/', [SessionController::class, 'signupuser'])->name('signup.user');
                    Route::post('/create', [SessionController::class, 'postSignupUser']);
                });
            });
            //developer
            Route::group(['prefix' => '/developer'], function () {
                Route::group(['prefix' => '/signin'], function () {
                    Route::get('/', [DeveloperController::class, 'SigninDeveloper']);
                    // Route::post('/create', [AuthController::class, 'postSignin']);
                });
                Route::group(['prefix' => '/signup'], function () {
                    Route::get('/', [DeveloperController::class, 'SignupDeveloper']);
                    Route::post('/create', [DeveloperController::class, 'storeFront']);
                });
            });
            //agent
            Route::group(['prefix' => '/agent'], function () {
                Route::group(['prefix' => '/signin'], function () {
                    Route::get('/', [AgentController::class, 'signinAgent']);
                    Route::post('/create', [AgentController::class, 'postSigninAgent']);
                });
                Route::group(['prefix' => '/signup'], function () {
                    Route::get('/', [AgentController::class, 'signup']);
                    Route::post('/create', [AgentController::class, 'storeFront'])->name('agent.store.auth');
                });
            });
        });
    });
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/', [UnitController::class, 'homeunit'])->name('beranda');

// developer
Route::middleware(['auth', 'IsDeveloper'])->group(function () {
    Route::group(['prefix' => '/developer'], function () {
        Route::get('/dashboard', [DeveloperController::class, 'dashboard'])->name('developer.dashboard');
        // Route::get('/dashboard', function () {
        //     return view('pages.page.profile1');
        // })->name('developer.dashboard');
        Route::get('/profile', [DeveloperController::class, 'showFront'])->name('developer.profile')->withoutMiddleware(['IsDeveloper']);
        Route::put('/update/{developer}', [DeveloperController::class, 'updateFront'])->name('developer.update.developer')->withoutMiddleware(['IsDeveloper']);

        Route::group(['prefix' => '/property'], function () {
            Route::get('/create', [PropertyController::class, 'createFront'])->name('property.create.developer');
            Route::post('/store', [PropertyController::class, 'storeFront'])->name('property.store.developer');
            Route::get('/{property}', [PropertyController::class, 'show'])->name('property.show.developer');
            Route::get('/edit/{property}', [PropertyController::class, 'edit'])->name('property.edit.developer');
            Route::put('/update/{property}', [PropertyController::class, 'update'])->name('property.update.developer');
            Route::get('/destroy/{property}', [PropertyController::class, 'destroy'])->name('property.destroy.developer');
        });

        Route::group(['prefix' => '/unit'], function () {
            Route::get('/create/{propertyId}', [UnitController::class, 'create'])->name('unit.create.developer');
            Route::post('/store/{propertyId}', [UnitController::class, 'store'])->name('unit.store.developer');
            Route::get('/{unit}', [UnitController::class, 'show'])->name('unit.show.developer');
            Route::get('/edit/{unit}', [UnitController::class, 'edit'])->name('unit.edit.developer');
            Route::put('/update/{unit}', [UnitController::class, 'update'])->name('unit.update.developer');
            Route::get('/destroy/{unit}', [UnitController::class, 'destroy'])->name('unit.destroy.developer');
        });
        Route::get('/history', [DeveloperController::class, 'history']);


        Route::get('/css/Lib/fix/css/{filename}', function ($filename) {
            $file = public_path("css/Lib/fix/css/{$filename}");
            if (file_exists($file)) {
                return response()->file($file);
            } else {
                return response('File not found', 404);
            }
        })->where('filename', '.*\.css');

        Route::get('/js/Lib/fix/js/{filename}', function ($filename) {
            $file = public_path("js/Lib/fix/js/{$filename}");
            if (file_exists($file)) {
                return response()->file($file);
            } else {
                return response('File not found', 404);
            }
        })->where('filename', '.*\.js');
    });
});

// agent
Route::middleware(['auth', 'IsAgent'])->group(function () {
    Route::group(['prefix' => '/agent'], function () {
        Route::get('/dashboard', [AgentController::class, 'dashboard'])->name('agent.dashboard');
        Route::get('/profile', [AgentController::class, 'edit'])->name('agent.profile')->withoutMiddleware(['IsAgent']);
        Route::put('/update/{agent}', [AgentController::class, 'updateFront'])->name('agent.update.agent')->withoutMiddleware(['IsAgent']);

        Route::group(['prefix' => '/property'], function () {
            Route::get('/create', [PropertyController::class, 'createFront'])->name('property.create.agent');
            Route::post('/store', [PropertyController::class, 'storeFront'])->name('property.store.agent');
            Route::get('/{property}', [PropertyController::class, 'show'])->name('property.show.agent');
            Route::get('/edit/{property}', [PropertyController::class, 'edit'])->name('property.edit.agent');
            Route::put('/update/{property}', [PropertyController::class, 'update'])->name('property.update.agent');
            Route::get('/destroy/{property}', [PropertyController::class, 'destroy'])->name('property.destroy.agent');
        });

        Route::group(['prefix' => '/unit'], function () {
            Route::get('/create/{propertyId}', [UnitController::class, 'create'])->name('unit.create.agent');
            Route::post('/store/{propertyId}', [UnitController::class, 'store'])->name('unit.store.agent');
            Route::get('/{unit}', [UnitController::class, 'show'])->name('unit.show.agent');
            Route::get('/edit/{unit}', [UnitController::class, 'edit'])->name('unit.edit.agent');
            Route::put('/update/{unit}', [UnitController::class, 'update'])->name('unit.update.agent');
            Route::get('/destroy/{unit}', [UnitController::class, 'destroy'])->name('unit.destroy.agent');
        });
    });
});

// pages
Route::group(['prefix' => '/pages'], function () {

    Route::get('/notfound', function () {
        return view('pages.page.notfound');
    });
    Route::get('/profile', [AgentController::class, 'edit'])->name('user.profile');

    // Route::get('/searchagent', [AgentController::class, 'filter'])->name('agent.search.user');

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

    //payment
    Route::get('/langganan', [SubscribeController::class, 'indexFront'])->name('langganan.index'); //list sub
    // Route::get('/langganan/{subscribe}', [SubscribeController::class, 'show'])->name('subscribe.lihat'); //detail sub
    Route::post('/addtoorder/{subsId}', [OrderController::class, 'storeFront'])->name('subscribeid.store'); //masuk sub ke order
    Route::get('/detailorder/{order}', [OrderController::class, 'showFront'])->name('detailorder'); //detail order
    // Route::get('/afterorder/{order}', [OrderController::class, 'show'])->name('afterorder'); //detail order
    Route::post('/already/{developer}', [DeveloperController::class, 'updateSub'])->name('sub.already');

    Route::get('/notifikasi', function () {
        return view('pages.page.notification');
    });

    // property
    Route::group(['prefix' => '/property'], function () {
        Route::get('/{property}', [PropertyController::class, 'show'])->name('property.show.user');
    });
    // unit
    Route::group(['prefix' => '/unit'], function () {
        Route::get('/search', [UnitController::class, 'filter'])->name('unit.search.user');
        Route::get('/{unit}', [UnitController::class, 'show'])->name('unit.show.user');
    });
    Route::group(['prefix' => '/agent'], function () {
        Route::get('/', [AgentController::class, 'filter'])->name('agent.search.user');
        Route::get('/{agent}', [AgentController::class, 'show'])->name('agent.show.user');
        // Route::get('/search', [AgentController::class, 'filter'])->name('agent.search.user');
    });
});

Route::get('/favorite', [FavoriteController::class, 'index'])->name('favorite.index');

Route::get('/detailpanduan', function () {
    return view('pages.page.detailguide');
})->name('detailpanduan');


//  admin
Route::middleware(['auth', 'IsAdmin:admin'])->group(function () {
    Route::group(['prefix' => '/admin'], function () {
        Route::post('/developers/reject/{id}', [DeveloperController::class, 'updateRejected'])->name('developer.reject');
        Route::post('/developers/approve/{id}', [DeveloperController::class, 'updateApproved'])->name('developer.approve');
        Route::post('/agents/reject/{id}', [AgentController::class, 'updateRejected'])->name('agent.reject');
        Route::post('/agents/approve/{id}', [AgentController::class, 'updateApproved'])->name('agent.approve');
        Route::get('/', [AdminController::class, 'index']);
        Route::get("/dashboard", [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/profile', [AdminController::class, 'show'])->name('profile.show');

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
        Route::post('/order/{subsId}', [OrderController::class, 'store'])->name('subid.store');

        // Route::post('/subscribe/{id}', [`SubscribeController::class, 'show'])->name('subscribe.show');
        Route::get('/search/filter', [UnitController::class, 'filter'])->name('unit.filter');
    });
});

Route::get('/pdf-preview/{file}', [FilePreviewController::class, 'show'])->name('pdf.preview');
Route::get('/admin/notifications', [AdminController::class, 'notifications'])->name('admin.notifications');
Route::get('regency', [IndoregionController::class, 'getregency'])->name('get.regency');
Route::get('districts', [IndoregionController::class, 'getdistricts'])->name('get.districts');
Route::get('villages', [IndoregionController::class, 'getvillages'])->name('get.villages');

Route::post('favorite-add/{id}', [FavoriteController::class, 'store'])->name('favorite.add');
Route::get('favorite-remove/{id}', [FavoriteController::class, 'destroy'])->name('favorite.remove');
Route::get('favorite-removeall', [FavoriteController::class, 'destroyall'])->name('favorite.removeall');
Route::post('/payments/midtrans-notification', [PaymentCallbackController::class, 'receive']);
Route::post('/payments/finish', [PaymentCallbackController::class, 'finish']);

Route::get('/navbar', function () {
    return view('layout.partial.nav');
});

Route::get('/footer', function () {
    return view('layout.partial.footer');
});
