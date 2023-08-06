@extends('layout.layout')

@section('title', '로그인')

@section('content')
 
<div class="sign-in__wrap">
  <form method="post">
    <div class="form-outline mb-4">
      <input type="email" id="form2Example1" class="form-control" />
      <label class="form-label" for="form2Example1">아이디</label>
    </div>

    <div class="form-outline mb-4">
      <input type="password" id="form2Example2" class="form-control" />
      <label class="form-label" for="form2Example2">비밀번호</label>
    </div>

    <div class="row mb-4">
      <div class="col col-md-6 d-flex justify-content-center">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked>
          <label class="form-check-label" for="form2Example31">자동 로그인</label>
        </div>
      </div>

      <div class="col col-md-6">
        <a href="#!">아이디, 비밀번호를 잊으셨나요?</a>
      </div>
    </div>

    <button type="button" class="btn btn-primary w-100 mb-4">로그인</button>

    <div class="text-center">
      <p>회원이 아니신가요? <a href="#!">가입해보세요!</a></p>
    </div>
  </form>
</div>
 
@endsection