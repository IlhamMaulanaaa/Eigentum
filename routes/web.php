<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\IndoregionController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentCallbackController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SpecificationController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\FilePreviewController;
use App\Models\Subcribe;

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

Route::get('/beranda', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return redirect('admin/');
// })->middleware('auth');


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
        Route::get('/', [SessionController:: class, 'signup'])->name('register')->middleware('guest');
        Route::post('/create', [SessionController:: class, 'postSignup']);
    });
});

Route::group(['prefix' => '/admin', 'middleware' => 'role:admin' ], function(){
    
    Route::get('/', [AdminController:: class, 'index']);
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
    Route::post('/order/{subsId}', [OrderController::class, 'store'])->name('subid.store');

    // Route::post('subscribe/{id}', [SubscribeController::class, 'show'])->name('subscribe.show');


    
    Route::get('/pdf-preview/{file}', [FilePreviewController::class, 'show'])->name('pdf.preview');
});

Route::get('regency', [IndoregionController::class, 'getregency'])->name('get.regency');
Route::get('districts', [IndoregionController::class, 'getdistricts'])->name('get.districts');
Route::get('villages', [IndoregionController::class, 'getvillages'])->name('get.villages');

Route::post('favorite-add/{id}', [FavoriteController::class, 'store'])->name('favorite.add');
Route::delete('favorite-remove/{id}', [FavoriteController::class, 'destroy'])->name('favorite.remove');
Route::post('/payments/midtrans-notification', [PaymentCallbackController::class, 'receive']);