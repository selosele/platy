<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\SignInController;
use App\Providers\RouteServiceProvider;

// 로그인 페이지
Route::get('/sign-in', [SignInController::class, 'signInView'])
  ->name(RouteServiceProvider::SIGN_IN);

// 로그인
Route::post('/sign-in', [SignInController::class, 'signIn']);