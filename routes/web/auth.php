<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SignInOutController;
use App\Providers\RouteServiceProvider;

// 회원가입 페이지 출력
Route::get('/auth/register', [RegisterController::class, 'page']);

// 회원가입 수행
Route::post('/auth/register', [RegisterController::class, 'register']);

// 로그인 페이지 출력
Route::get('/auth/sign-in', [SignInOutController::class, 'page'])
  ->name(RouteServiceProvider::SIGN_IN);

// 로그인 수행
Route::post('/auth/sign-in', [SignInOutController::class, 'signIn']);

// 로그아웃 수행
Route::get('/auth/sign-out', [SignInOutController::class, 'signOut']);
