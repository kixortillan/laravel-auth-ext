<?php

use Illuminate\Support\ServiceProvider;

class AuthExtServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        if ($this->app->runningInConsole())
        {
            $this->publishes([
                __DIR__ . '/Model' => app_path('Model')
            ], 'auth-ext');
        }
    }

    public function register()
    {
        
    }

}
