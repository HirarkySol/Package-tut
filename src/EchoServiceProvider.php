<?php

namespace Hirarky\Packagetut;

use Illuminate\Support\ServiceProvider;

class EchoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/route.php';
       $this->app->make('Hirarky\Packagetut\EchoController');
    }
}
