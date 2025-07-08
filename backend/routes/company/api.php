<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CompanyModule\CompanyManagermentController;

Route::middleware(['api', 'auth:sanctum'])->group(function () {
    Route::get('/companies', [CompanyManagermentController::class, 'index']);       
    Route::post('/companies', [CompanyManagermentController::class, 'store']);      
    Route::get('/companies/{id}', [CompanyManagermentController::class, 'show']);   
    Route::put('/companies/{id}', [CompanyManagermentController::class, 'update']); 
    Route::delete('/companies/{id}', [CompanyManagermentController::class, 'destroy']); 
});
