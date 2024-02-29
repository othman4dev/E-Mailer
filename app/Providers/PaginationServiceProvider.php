<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
class PaginationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        Paginator::useBootstrap();
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
