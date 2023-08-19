import $ from 'jquery';
import { validate } from "../../global/utils";

// 로그인 Form 유효성 검증
validate('#signInForm', function() {
  $('#signInForm').off('submit').submit();
});
