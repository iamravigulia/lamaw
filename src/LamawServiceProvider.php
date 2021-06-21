<?php

namespace edgewizz\lamaw;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LamawServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Lamaw\Controllers\LamawController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__ . '/components', 'lamaw');
        Blade::component('lamaw::lamaw.open', 'lamaw.open');
        Blade::component('lamaw::lamaw.index', 'lamaw.index');
        Blade::component('lamaw::lamaw.edit', 'lamaw.edit');
    }
}
