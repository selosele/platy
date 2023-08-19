@extends('layout.layout')

@section('title', '로그인')

@section('content')
<div class="sign-in__wrap mini-content">
  
  @if (session('registerOk'))
    <div class="alert alert-success">
      {{ session('registerOk') }}
    </div>
  @endif
  
  @if (session('signInFail'))
    <div class="alert alert-danger">
      {{ session('signInFail') }}
    </div>
  @endif

  <form method="post" action="/auth/sign-in" id="signInForm" data-parsley-validate>
    @csrf
    <div class="input-group mb-3">
      <label for="account" class="input-group-text">아이디</label>
      <input type="text" class="form-control" id="account" name="account" placeholder="아이디를 입력하세요"
        data-parsley-required="true"
        data-parsley-maxlength="20">
    </div>

    <div class="input-group mb-3">
      <label for="password" class="input-group-text">비밀번호</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="비밀번호를 입력하세요"
        data-parsley-required="true"
        data-parsley-minlength="6"
        data-parsley-maxlength="30">
    </div>

    <div class="form-check mb-3">
      <input type="checkbox" class="form-check-input" name="remember" id="remember">
      <label class="form-check-label" for="remember">로그인 상태 유지</label>
    </div>

    <button type="submit" class="btn btn-primary w-100">로그인</button>
  </form>
</div>
@endsection

@push('js')
  @vite('resources/js/views/content/sign-in.js')
@endpush