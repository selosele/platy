<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

// 메인 페이지
Route::get('/', [IndexController::class, 'indexView']);