// resources/assets/js/app.js

require('./bootstrap');

window.Vue = require('vue');

import App from './App.vue';
import router from './router'; // Import router from the router.js file

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
