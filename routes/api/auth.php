<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

// 아이디 중복 검증
Route::get('/auth/check-account/{account}', [RegisterController::class, 'checkAccount']);
