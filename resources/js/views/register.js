import { isBlank } from "../global/util";

// 회원가입 버튼 클릭 시
document.querySelector('#registerBtn').addEventListener('click', () => {
  if (!isValid()) { return; }
  
  document.querySelector('#registerForm').submit();
});

/** 회원가입 form 값의 유효성을 검사한다. */
function isValid() {
  const memAcnt = document.querySelector('#memAcnt');
  const memEmail = document.querySelector('#memEmail');
  const memNknm = document.querySelector('#memNknm');
  const memPswd = document.querySelector('#memPswd');
  const memPswdChk = document.querySelector('#memPswdChk');

  if (!isIdValid(memAcnt) || !isEmailValid(memEmail)
   || !isNickNameValid(memNknm) || !isPasswordValid(memPswd, memPswdChk)) {
    return false;
  }

  return true;
}

/** 아이디 유효성을 검사한다. */
function isIdValid(memAcnt) {
  if (isBlank(memAcnt.value)) {
    alert('아이디를 입력하세요.');
    memAcnt.focus();
    return false;
  }

  if (20 < memAcnt.value.length) {
    alert('아이디는 20자 이내로 입력하세요.');
    memAcnt.focus();
    return false;
  }

  return true;
}

/** 이메일 유효성을 검사한다. */
function isEmailValid(memEmail) {
  if (isBlank(memEmail.value)) {
    alert('이메일을 입력하세요.');
    memEmail.focus();
    return false;
  }

  return true;
}

/** 닉네임 유효성을 검사한다. */
function isNickNameValid(memNknm) {
  if (isBlank(memNknm.value)) {
    alert('닉네임을 입력하세요.');
    memNknm.focus();
    return false;
  }

  if (20 < memNknm.value.length) {
    alert('닉네임은 20자 이내로 입력하세요.');
    memNknm.focus();
    return false;
  }

  return true;
}

/** 비밀번호 유효성을 검사한다. */
function isPasswordValid(memPswd, memPswdChk) {
  if (isBlank(memPswd.value)) {
    alert('비밀번호를 입력하세요.');
    memPswd.focus();
    return false;
  }

  if (6 > memPswd.value.length || 30 < memPswd.value.length) {
    alert('비밀번호는 6자 이상 30자 이내로 입력하세요.');
    memPswd.focus();
    return false;
  }

  if (isBlank(memPswdChk.value) || (memPswd.value !== memPswdChk.value)) {
    alert('비밀번호를 확인하세요.');
    memPswdChk.focus();
    return false;
  }

  return true;
}
