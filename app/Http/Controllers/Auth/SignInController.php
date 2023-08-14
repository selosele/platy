<?php

namespace App\Http\Controllers\Auth;

use App\Facades\Console;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * 로그인 컨트롤러
 */
class SignInController extends Controller
{
    /**
     * 로그인 페이지를 출력한다.
     */
    public function page()
    {
        return view('auth.sign-in');
    }

    /**
     * 로그인을 수행한다.
     */
    public function signIn(Request $request)
    {
        
    }
}
