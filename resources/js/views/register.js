import $ from 'jquery';
import { http, isBlank, message, validate } from '../global/utils';

// 회원가입 Form 유효성 검증
validate('#registerForm', function() {
  message.confirmSuccess('가입하시겠습니까?').then(confirm => {
    if (!confirm) return;
    $('#registerForm').off('submit').submit();
  });
});

document.querySelector('#memAcnt').addEventListener('keyup', checkAcnt);
document.querySelector('#memPswd').addEventListener('keyup', detectCapsLockKey);
document.querySelector('#memPswdChk').addEventListener('keyup', detectCapsLockKey);

/** 아이디의 중복을 검증한다. */
function checkAcnt(e) {
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
}

/** 비밀번호 입력 시, CapsLock키의 입력을 감지한다. */
function detectCapsLockKey(e) {
  if (e.getModifierState('CapsLock')) {
    e.target.classList.add('is-invalid');
    message.toastWarning('CapsLock키가 켜져 있습니다.');
    return;
  }

  e.target.classList.remove('is-invalid');
}
