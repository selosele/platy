@extends('layout.layout')

@section('title', '회원가입')

@section('content')
<div class="register__wrap mini-content" data-parsley-validate>
  <form method="post" action="/auth/register" id="registerForm">
    @csrf
    <div class="input-group mb-3">
      <label for="memAcnt" class="input-group-text">아이디</label>
      <input type="text" class="form-control" id="memAcnt" name="memAcnt" placeholder="20자 이내"
        data-parsley-required="true"
        data-parsley-maxlength="20">
    </div>

    <div class="input-group mb-3">
      <label for="memEmail" class="input-group-text">이메일</label>
      <input type="email" class="form-control" id="memEmail" name="memEmail" placeholder="example@example.com"
        data-parsley-required="true">
    </div>

    <div class="input-group mb-3">
      <label for="memNknm" class="input-group-text">닉네임</label>
      <input type="text" class="form-control" id="memNknm" name="memNknm" placeholder="20자 이내"
        data-parsley-required="true"
        data-parsley-maxlength="20">
    </div>

    <div class="input-group mb-3">
      <label for="memPswd" class="input-group-text">비밀번호</label>
      <input type="password" class="form-control" id="memPswd" name="memPswd" placeholder="6~30자 이내"
        data-parsley-required="true"
        data-parsley-minlength="6"
        data-parsley-maxlength="30"
        data-parsley-equalto="#memPswdChk">
    </div>

    <div class="input-group mb-3">
      <label for="memPswdChk" class="input-group-text">비밀번호 확인</label>
      <input type="password" class="form-control" id="memPswdChk" name="memPswd_confirmation"
        data-parsley-required="true"
        data-parsley-equalto="#memPswd">
    </div>

    <button type="submit" class="btn btn-primary w-100" id="registerBtn">가입하기</button>
  </form>
</div>
@endsection

@push('js')
  @vite('resources/js/views/register.js')
@endpush