<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserModule\UserManagermentController;



Route::get('/', function () {
    return redirect('/dashboard'); // hoặc return view('welcome');
});

// Trang dashboard chính
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['web', 'auth', 'verified'])->name('dashboard');

// Nhóm route trong dashboard
Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
    'middleware' => ['web', 'auth', 'verified']
], function () {
    Route::get('/user-managerment', [UserManagermentController::class, 'index'])->name('user');
});

// Trang profile
Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Tạm thời render view users.index
Route::get('/users', function () {
    return view('users.index');
})->middleware(['auth']);

// Route đăng nhập/đăng ký do Laravel Breeze/Fortify tạo sẵn
require __DIR__.'/auth.php';
