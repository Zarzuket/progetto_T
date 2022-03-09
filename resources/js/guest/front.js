window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

require('../bootstrap');

window.Vue = require('vue');

import App from './App';
import router from './router';

const app = new Vue({
    el: '#app',
    render: h => h(App),
    router
});
