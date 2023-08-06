<?php

namespace App\Http\Controllers\auth;

use App\Facades\Console;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function signInView()
    {
        return view('auth/sign-in');
    }

    public function signIn(Request $request)
    {
        Console::writeln('signInDto >>> ' . $request->signInDto);
    }
}
