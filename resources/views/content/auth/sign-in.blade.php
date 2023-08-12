@extends('layout.layout')

@section('title', '로그인')

@section('content')
<div class="sign-in__wrap mini-content">
  
  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <form method="post" action="/auth/sign-in" id="signInForm">
    @csrf
    <div class="input-group mb-3">
      <label for="memAcnt" class="input-group-text">아이디</label>
      <input type="text" class="form-control" id="memAcnt" name="memAcnt" placeholder="아이디를 입력하세요">
    </div>

    <div class="input-group mb-3">
      <label for="memEmail" class="input-group-text">이메일</label>
      <input type="text" class="form-control" id="memEmail" name="memEmail" placeholder="이메일주소를 입력하세요">
    </div>

    <div class="input-group mb-3">
      <label for="memNickname" class="input-group-text">닉네임</label>
      <input type="text" class="form-control" id="memNickname" name="memNickname" placeholder="닉네임을 입력하세요">
    </div>

    <div class="input-group mb-3">
      <label for="memPswd" class="input-group-text">비밀번호</label>
      <input type="password" class="form-control" id="memPswd" name="memPswd" placeholder="비밀번호를 입력하세요">
    </div>

    <div class="form-check mb-3">
      <input type="checkbox" class="form-check-input" name="rememberMe" id="rememberMe" value="Y">
      <label class="form-check-label" for="rememberMe">로그인 상태 유지</label>
    </div>

    <button type="button" class="btn btn-primary w-100" id="signInBtn">로그인</button>
  </form>
</div>
@endsection

@push('js')
  @vite('resources/js/views/sign-in.js')
@endpush