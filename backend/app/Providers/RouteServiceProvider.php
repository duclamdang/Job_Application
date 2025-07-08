<?php
namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as BaseRouteServiceProvider;

class RouteServiceProvider extends BaseRouteServiceProvider

{
    public function boot(): void
{
    parent::boot();
    $this->routes(function () {
        Route::middleware('api')
            ->prefix('api')
            ->group(function () {
                require base_path('routes/job/api.php');
                require base_path('routes/company/api.php');
            });
    });
}
}
