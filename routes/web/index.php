<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

// 메인 페이지 출력
Route::get('/', [IndexController::class, 'page']);
