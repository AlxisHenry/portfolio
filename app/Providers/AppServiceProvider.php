<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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
        if (str_starts_with(env('APP_URL'), 'https')) {
            URL::forceScheme('https');
        }

        view()->composer(['errors.404', 'errors::404'], function ($view) {
            $view->with(['navbar' => 'null']);
        });
        view()->composer(['errors.503', 'errors::503'], function ($view) {
            $view->with(['navbar' => 'null']);
        });
    }
}
