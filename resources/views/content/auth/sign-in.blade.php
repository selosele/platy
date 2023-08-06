@extends('layout.layout')

@section('title', '로그인')

@section('content')
 
<div class="sign-in__wrap">
  <form method="post" id="signInForm">
    <div class="form-group">
      <label for="memAcnt">아이디</label>
      <input type="text" class="form-control" id="memAcnt" name="memAcnt" placeholder="아이디를 입력하세요">
    </div>

    <div class="form-group">
      <label for="memPswd">비밀번호</label>
      <input type="password" class="form-control" id="memPswd" name="memPswd" placeholder="비밀번호를 입력하세요">
    </div>

    <div class="form-group form-check custom-control custom-checkbox mr-sm-2">
      <input type="checkbox" class="custom-control-input" name="rememberMe" id="rememberMe" value="Y">
      <label class="custom-control-label" for="rememberMe">로그인 상태 유지</label>
    </div>

    <button type="button" class="btn btn-primary w-100" id="signInBtn">로그인</button>
  </form>
</div>
 
@endsection