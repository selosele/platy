<?php

namespace App\Http\Services\Auth;

use Illuminate\Support\Facades\Hash;

/**
 * 인증·인가 서비스
 */
class AuthService
{
    /**
     * 로그인 가능 여부를 검증한다.
     */
    public function canSignIn($user, $password): bool {

        // 사용자가 존재하고 탈퇴하지 않았으며, 입력된 비밀번호와 저장된 비밀번호가 일치하는지 확인
        return $user && $user['LEAVED'] == 'N' && Hash::check($password, $user['PASSWORD']);
    }
}
