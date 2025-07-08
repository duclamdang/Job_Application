<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

// Admin routes
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('login');

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
        Route::post('/logout', [AdminAuthController::class, 'adminLogout'])->name('logout');
    });
});



