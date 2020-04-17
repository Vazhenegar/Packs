<?php
namespace packs\ticket;

use Illuminate\Support\ServiceProvider;

class ticketServiceProvider extends ServiceProvider
{

    public function register()
    {

    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/db/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'ticket');

        $this->publishes([
            __DIR__.'/public' => public_path('/'),
        ], 'public');
        $this->publishes([
            __DIR__.'/config.php' => config_path('ticket_config.php')
        ], 'ticket_config');
        $this->publishes([__DIR__.'/db/migrations/' => database_path('migrations')], 'migrations');

        //php artisan vendor:publish --tag=ticket_config --force
    }
}
