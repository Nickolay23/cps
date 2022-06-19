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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function (){
    Route::group([
        'prefix' => 'admin',
        'as' =>'admin.',
        'middleware' => 'is_admin'
    ], function () {
        Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
        Route::resource('pages', \App\Http\Controllers\Admin\PageController::class);
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
        Route::resource('spareparts', \App\Http\Controllers\Admin\SparepartController::class);
        Route::resource('manufacturers', \App\Http\Controllers\Admin\ManufacturerController::class);
        Route::resource('carmodels', \App\Http\Controllers\Admin\CarmodelController::class);
        Route::resource('partmanufacturers', \App\Http\Controllers\Admin\PartmanufacturerController::class);
    });

    Route::group([
        'prefix' => 'user',
        'as' => 'users.',
    ], function () {
        Route::get('/', [App\Http\Controllers\User\ProfileController::class, 'index'])->name('home');
    });
//    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/{category}', [\App\Http\Controllers\CategoryController::class, 'category'])->name('category');
