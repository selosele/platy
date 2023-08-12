<?php

namespace App\Http\Controllers\auth;

use App\Facades\Console;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * 회원가입 컨트롤러
 */
class RegisterController extends Controller
{
    public function view()
    {
        return view('auth/register');
    }

    public function register(Request $request)
    {
        Console::writeln();
    }
}
