<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SignInController;
use App\Providers\RouteServiceProvider;

// 회원가입 페이지
Route::get('/auth/register', [RegisterController::class, 'page']);

// 회원가입
Route::post('/auth/register', [RegisterController::class, 'register']);

// 로그인 페이지
Route::get('/auth/sign-in', [SignInController::class, 'page'])
  ->name(RouteServiceProvider::SIGN_IN);

// 로그인
Route::post('/auth/sign-in', [SignInController::class, 'signIn']);