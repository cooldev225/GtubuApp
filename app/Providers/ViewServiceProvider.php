<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            [
                'frontend.layouts.home',
                'frontend.layouts.dashboard',
                'frontend.home',
                'frontend.listing',
            ],
            'App\Http\Binds\DashboardComposer'
        );
    }
}
