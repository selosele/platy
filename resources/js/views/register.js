import $ from 'jquery';
import { http, isBlank, message, validate } from '../global/utils';

// 회원가입 Form 유효성 검증
validate('#registerForm', function() {
  message.confirmSuccess('가입하시겠습니까?').then(confirm => {
    if (!confirm) return;
    $('#registerForm').off('submit').submit();
  });
});

// 아이디 필드 keyup 이벤트
document.querySelector('#memAcnt').addEventListener('keyup', function(e) {
  const target = e.target;
  const submitBtn = document.querySelector('#registerBtn');

  if (isBlank(target.value)) {
    target.classList.remove('is-invalid', 'is-valid');
    submitBtn.removeAttribute('disabled');
    return;
  }
  
  // 아이디 중복 검증
  http.get(`/auth/check-acnt/${target.value}`)
  .then(resp => {

    // 0: 중복 X, 1: 중복
    if (resp.data === 1) {
      message.toastWarning('사용할 수 없는 아이디입니다.');
      target.classList.add('is-invalid');
      submitBtn.setAttribute('disabled', true);
      return;
    }
    
    target.classList.remove('is-invalid');
    target.classList.add('is-valid');
    submitBtn.removeAttribute('disabled');
  });
});
