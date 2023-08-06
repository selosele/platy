/** 값이 비었는지 확인한다. */
export function isEmpty(value) {
  return null === value || undefined === value || '' === value;
}

/** 값이 있는지 확인한다. */
export function isNotEmpty(value) {
  return !isEmpty(value);
}

/** 문자열 값이 비었는지 확인한다. */
export function isBlank(value) {
  return isEmpty(value) || 0 === value.trim().length;
}

/** 문자열 값이 있는지 확인한다. */
export function isNotBlank(value) {
  return !isBlank(value);
}

/** form values -> JSON으로 가공 */
export function serialize(form) {
  return new FormData(form);
}
