<?php

namespace Fooecom\Sample;

use Illuminate\Support\ServiceProvider;

class SampleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/path/to/assets' => public_path('vendor/courier'),], 'public');
        $this->loadViewsFrom(__DIR__.'/views', 'sample');
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
        include __DIR__ . '/routes/routes.php';
        $this->app->make('Fooecom\Sample\SampleController');
    }
}
