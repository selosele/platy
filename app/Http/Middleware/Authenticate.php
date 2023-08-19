<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * 인증되지 않은 사용자가 이동될 라우트 경로
     */
    protected $redirectTo = RouteServiceProvider::SIGN_IN;

    /**
     * 사용자의 인증 여부에 따른 라우팅 처리를 수행한다.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
            if (Auth::check()) {
                return route('/');
            }

            return route($this->redirectTo);
        }
    }
}
