<?php

namespace Yk\LaravelBackup;

use Illuminate\Support\ServiceProvider;

class LaravelBackupProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('Archive', function(){
            return $this->app->make('Yk\LaravelArchive\Archive');
        });

    }
}
