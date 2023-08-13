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
    public function page()
    {
        return view('auth.sign-in');
    }

    public function signIn(Request $request)
    {
        
    }
}
