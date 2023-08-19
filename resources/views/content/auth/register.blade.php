@extends('layout.layout')

@section('title', '회원가입')

@section('content')
<div class="register__wrap mini-content">
  <form method="post" action="/auth/register" id="registerForm" data-parsley-validate>
    @csrf
    <div class="input-group mb-3">
      <label for="account" class="input-group-text">아이디</label>
      <input type="text" class="form-control" id="account" name="account" placeholder="20자 이내"
        data-parsley-required="true"
        data-parsley-maxlength="20">
    </div>

    <div class="input-group mb-3">
      <label for="email" class="input-group-text">이메일</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="example@example.com"
        data-parsley-required="true">
    </div>

    <div class="input-group mb-3">
      <label for="nickname" class="input-group-text">닉네임</label>
      <input type="text" class="form-control" id="nickname" name="nickname" placeholder="20자 이내"
        data-parsley-required="true"
        data-parsley-maxlength="20">
    </div>

    <div class="input-group mb-3">
      <label for="password" class="input-group-text">비밀번호</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="6~30자 이내"
        data-parsley-required="true"
        data-parsley-minlength="6"
        data-parsley-maxlength="30"
        data-parsley-equalto="#passwordChk">
    </div>

    <div class="input-group mb-3">
      <label for="passwordChk" class="input-group-text">비밀번호 확인</label>
      <input type="password" class="form-control" id="passwordChk" name="password_confirmation"
        data-parsley-required="true"
        data-parsley-equalto="#password">
    </div>

    <button type="submit" class="btn btn-primary w-100" id="registerBtn">가입하기</button>
  </form>
</div>
@endsection

@push('js')
  @vite('resources/js/views/register.js')
@endpush