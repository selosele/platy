<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Services\Auth\AuthService;
use App\Models\Auth\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * 로그인/로그아웃 Controller
 */
class SignInOutController extends Controller
{
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    protected $authService;
    
    /**
     * 회원가입 완료 후 이동할 라우트 경로
     */
    protected $redirectTo = '/' . RouteServiceProvider::SIGN_IN;

    /**
     * 로그인 페이지를 출력한다.
     */
    public function page()
    {
        // 인증된 사용자는 메인 페이지로 이동
        if (Auth::check()) {
            return redirect('/');
        }

        return view('auth.sign-in');
    }

    /**
     * 로그인을 수행한다.
     */
    public function signIn(Request $request)
    {
        $credentials = $request->validate([
            'account'  => 'required|string|max:20',
            'password' => 'required|string|min:6|max:30',
        ]);

        // 입력된 아이디에 해당하는 사용자를 조회
        $foundUser = User::where('ACCOUNT', $credentials['account'])->first();

        if ($this->authService->canSignIn($foundUser, $credentials['password'])) {
            Auth::login($foundUser, $request->filled('remember'));

            return redirect('/');
        }

        return redirect()->back()
            ->with('signInFail', '입력하신 정보를 다시 확인하세요.');
    }

    /**
     * 로그아웃을 수행한다.
     */
    public function signOut()
    {
        Auth::logout();
        
        return redirect($this->redirectTo);
    }
}
