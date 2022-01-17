<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Counter;

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
        
        $this->app->singleton(Counter::class, function ($app) {
            return new Counter(env('COUNTER_TIMEOUT'));
        });
    }
}
