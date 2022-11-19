<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        view()->composer(['errors.404', 'errors::404'], function ($view) {
            $view->with(['navbar' => 'null']);
        });
        view()->composer(['errors.503', 'errors::503'], function ($view) {
            $view->with(['navbar' => 'null']);
        });
    }
}
