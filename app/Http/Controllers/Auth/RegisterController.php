<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * 회원가입 컨트롤러
 */
class RegisterController extends Controller
{
    /**
     * 회원가입 완료 후 이동할 라우트 경로
     */
    protected $redirectTo = '/' . RouteServiceProvider::SIGN_IN;

    /**
     * 회원가입 페이지를 출력한다.
     */
    public function page()
    {
        return view('auth.register');
    }

    /**
     * 회원가입을 수행한다.
     */
    public function register(Request $request)
    {
        $request->validate([
            'account'  => 'required|string|max:20|unique:MEMBER,ACCOUNT',
            'email'    => 'required|string|email',
            'nickname' => 'required|string|max:20',
            'password' => 'required|string|min:6|max:30|confirmed',
        ]);
        
        User::create([
            'ACCOUNT'  => $request['account'],
            'EMAIL'    => $request['email'],
            'NICKNAME' => $request['nickname'],
            'PASSWORD' => Hash::make($request['password']),
        ]);

        return redirect($this->redirectTo)
            ->with('registerOk', '가입이 완료되었습니다. 로그인해주세요.');
    }

    /**
     * 아이디의 중복을 검증한다.
     */
    public function checkAcnt(string $acnt): int
    {
        $foundUser = User::where('ACCOUNT', $acnt)->first();
        
        // 유저가 존재하면 1, 아니면 0을 반환
        return $foundUser ? 1 : 0;
    }
}
