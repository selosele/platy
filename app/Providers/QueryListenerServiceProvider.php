<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class QueryListenerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        DB::listen(function($query) {
            
            // '/storage/logs/laravel.log' 파일에 쿼리를 기록
            Log::info($query->sql, $query->bindings);
        });
    }  
}
