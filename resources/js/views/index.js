import { message } from "../global/utils";

const signOutBtn = document.querySelector('#signOutBtn');

if (signOutBtn) {
  
  // 로그아웃
  signOutBtn.addEventListener('click', function(e) {
    e.preventDefault();
  
    message.confirmSuccess('로그아웃하시겠습니까?')
      .then(confirm => {
        if (!confirm) { return; }
  
        location.href = e.target.href;
      });
  });
}