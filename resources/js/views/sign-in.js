import { isBlank } from "../global/utils";

// 로그인 버튼 클릭 시
document.querySelector('#signInBtn').addEventListener('click', () => {
  if (!isValid()) { return; }
  
  document.querySelector('#signInForm').submit();
});

/** 로그인 form 값이 유효한지 확인한다. */
function isValid() {
  const memAcnt = document.querySelector('#memAcnt');
  const memPswd = document.querySelector('#memPswd');

  if (isBlank(memAcnt.value)) {
    alert('아이디를 입력하세요.');
    memAcnt.focus();
    return false;
  }

  if (isBlank(memPswd.value)) {
    alert('비밀번호를 입력하세요.');
    memPswd.focus();
    return false;
  }

  return true;
}
