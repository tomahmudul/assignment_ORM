<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LocationController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    //for users
    Route::get('home', function () {
        return view('user.home');
    })->name('home');

    //for admins
    Route::middleware('admin')->group(function () {

        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::controller(LocationController::class)->prefix('locations')->group(function () {
            Route::get('', 'index')->name('locations');
            Route::get('create', 'create')->name('locations.create');
            Route::post('store', 'store')->name('locations.store');
            Route::get('show/{id}', 'show')->name('locations.show');
            Route::get('edit/{id}', 'edit')->name('locations.edit');
            Route::put('edit/{id}', 'update')->name('locations.update');
            Route::delete('destroy/{id}', 'destroy')->name('locations.destroy');
        });

        Route::controller(ProductController::class)->prefix('products')->group(function () {
            Route::get('', 'index')->name('products');
            Route::get('create', 'create')->name('products.create');
            Route::post('store', 'store')->name('products.store');
            Route::get('show/{id}', 'show')->name('products.show');
            Route::get('edit/{id}', 'edit')->name('products.edit');
            Route::put('edit/{id}', 'update')->name('products.update');
            Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
        });

        Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
    });

});
