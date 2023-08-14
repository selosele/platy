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
