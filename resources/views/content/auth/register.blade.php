@extends('layout.layout')

@section('title', '회원가입')

@section('content')
 
<div class="register__wrap">
  <form method="post" action="/auth/register" id="registerForm">
    <div class="form-group">
      <label for="memAcnt">아이디</label>
      <input type="text" class="form-control" id="memAcnt" name="memAcnt" placeholder="아이디를 입력하세요">
    </div>

    <div class="form-group">
      <label for="memEmail">이메일</label>
      <input type="text" class="form-control" id="memEmail" name="memEmail" placeholder="이메일주소를 입력하세요">
    </div>

    <div class="form-group">
      <label for="memNknm">닉네임</label>
      <input type="text" class="form-control" id="memNknm" name="memNknm" placeholder="닉네임을 입력하세요">
    </div>

    <div class="form-group">
      <label for="memPswd">비밀번호</label>
      <input type="password" class="form-control" id="memPswd" name="memPswd" placeholder="비밀번호를 입력하세요">
    </div>

    <button type="button" class="btn btn-primary w-100" id="registerBtn">가입하기</button>
  </form>
</div>
 
@endsection