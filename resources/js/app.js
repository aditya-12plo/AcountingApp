import router from './routes.js';

require('./bootstrap');
require('chart.js');
require('es6-promise').polyfill();

window.Vue = require('vue');

const app = new Vue({
    el: '#AccountingApp',
    router
});
