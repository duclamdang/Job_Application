<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JobModule\JobManagermentController;

Route::middleware('api')->prefix('jobs')->group(function () {
    Route::get('/jobs', [JobManagermentController::class, 'index']);
    Route::post('/jobs', [JobManagermentController::class, 'store']);
    Route::put('/jobs/{id}', [JobManagermentController::class, 'update']);
    Route::delete('/jobs/{id}', [JobManagermentController::class, 'destroy']);
});

