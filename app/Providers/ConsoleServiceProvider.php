<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class ConsoleServiceProvider extends ServiceProvider
{

    public function register()
    {
        App::bind('consoleOutput', function() {
            return new \Symfony\Component\Console\Output\ConsoleOutput();
        });
    }
}