<?php

namespace Fooecom\Sample;

use Illuminate\Support\ServiceProvider;

class DisplayServiceProvider extends ServiceProvider {
    public function boot() {
        require __DIR__.'/routes/routes.php';
    }

    public function register() {
    }
}