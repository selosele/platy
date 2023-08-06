<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class CustomViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // 기본 View 경로 설정
        View::addLocation(resource_path('views/content'));
    }
}
