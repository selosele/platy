<header class="header">
  <div class="container">
    <div class="d-flex justify-content-between">
      <a href="/" class="site-title">{{ env('APP_NAME') }}</a>

      <ul class="links">
        @auth
        <li>
          <span class="auth">{{ auth()->user()->NICKNAME . '님 환영합니다.' }}</span>
          <a href="/auth/sign-out" id="signOutBtn">로그아웃</a>
        </li>
        @else
        <li>
          <a href="/auth/sign-in">로그인</a>
        </li>
        <li>
          <a href="/auth/register">회원가입</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</header>