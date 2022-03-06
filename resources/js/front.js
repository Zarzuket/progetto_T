window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

require('./bootstrap');

window.Vue = require('vue');


const app = new Vue({
    el: '#app',
});
