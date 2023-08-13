import { message } from '../global/utils';
import $ from 'jquery';
import 'parsleyjs';
import 'parsleyjs/src/i18n/ko';

$(function(){

  // 이 과정을 모듈화하기
  $('#registerForm').on('submit', function(e) {
    e.preventDefault();
    $(this).parsley().validate();

    if (!$(this).parsley().isValid()) { return false; }

    message.confirmSuccess('가입하시겠습니까?').then(confirm => {
      if (!confirm) return;
      $('#registerForm').off('submit').submit();
    });
  });

});
