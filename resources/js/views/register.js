import $ from 'jquery';
import { message, validate } from '../global/utils';

$(function(){

  // 회원가입 Form 유효성 검증
  validate('#registerForm', function() {
    message.confirmSuccess('가입하시겠습니까?').then(confirm => {
      if (!confirm) return;
      $('#registerForm').off('submit').submit();
    });
  });

});
