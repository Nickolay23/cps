<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::group([
        'prefix' => 'admin',
        'as' =>'admin.',
        'middleware' => 'is_admin'
    ], function () {
        Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
        Route::resource('spareparts', \App\Http\Controllers\Admin\SparepartController::class);
        Route::resource('manufacturers', \App\Http\Controllers\Admin\ManufacturerController::class);
        Route::resource('carmodels', \App\Http\Controllers\Admin\CarmodelController::class);
        Route::resource('partmanufacturers', \App\Http\Controllers\Admin\PartmanufacturerController::class);
        Route::resource('featuregroups', \App\Http\Controllers\Admin\FeatureGroupController::class);
        Route::resource('features', \App\Http\Controllers\Admin\FeatureController::class);
        Route::resource('works', \App\Http\Controllers\Admin\WorkController::class);
        Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);
        Route::resource('reviews', \App\Http\Controllers\Admin\ReviewController::class);
        Route::resource('suppliers', \App\Http\Controllers\Admin\SupplierController::class);
        Route::resource('orders', \App\Http\Controllers\Admin\OrdeController::class);
        Route::resource('pays', \App\Http\Controllers\Admin\PayController::class);
        Route::resource('incomes', \App\Http\Controllers\Admin\IncomeController::class);
        Route::resource('outcomes', \App\Http\Controllers\Admin\OutcomeController::class);
    });

    Route::group([
        'prefix' => 'user',
        'as' => 'users.',
    ], function () {
        Route::get('/', [App\Http\Controllers\User\ProfileController::class, 'index'])->name('home');
        Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('order-index');
    });
});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/delivery', [\App\Http\Controllers\HomeController::class, 'delivery'])->name('delivery');
Route::get('/contacts', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contacts');
Route::get('/order/create', [\App\Http\Controllers\OrderController::class, 'create'])->name('order-create');
Route::post('/order/create', [\App\Http\Controllers\OrderController::class, 'confirm'])->name('order-confirm');
Route::group([
    'prefix' => 'cart',
], function () {
    Route::get('/', [\App\Http\Controllers\CartController::class, 'index'])->name('cart');
    Route::post('/add/{sparepart}', [\App\Http\Controllers\CartController::class, 'cartAdd'])->name('cart-add');
    Route::post('/remove/{sparepart}', [\App\Http\Controllers\CartController::class, 'cartRemove'])->name('cart-remove');
});
Route::get('/{category}', [\App\Http\Controllers\CategoryController::class, 'category'])->name('category');
