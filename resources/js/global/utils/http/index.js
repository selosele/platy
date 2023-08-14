import axios from 'axios';

/** HTTP 통신 유틸 */
const http = axios.create({
  baseURL: '/api',
});

window.http = http;
window.http.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

export { http };
