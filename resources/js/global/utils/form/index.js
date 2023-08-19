import $ from 'jquery';
import 'parsleyjs';
import 'parsleyjs/src/i18n/ko';
import { isNotEmpty } from '../lang';

/** Form 유효성을 검증한다. */
export function validate(form, callback) {
  $(form).on('submit', function(e) {
    e.preventDefault();
    $(this).parsley().validate();
  
    if (!$(this).parsley().isValid()) { return false; }

    if (isNotEmpty(callback)) {
      callback();
    }
  });
}

/** 특정 필드에 유효성 오류가 있는지 검증한다. */
export function validationError(field) {
  return 0 < document.querySelectorAll(`.parsley-${field}`).length ? true : false;
}

/** 유효성 오류를 생성한다. */
export function addValidationError(el, field, options) {
  if (!validationError(field)) {
    $(el).parsley().addError(field, options);
  }
}

/** 유효성 오류를 제거한다. */
export function removeValidationError(el, field) {
  $(el).parsley().removeError(field);
}
