// import Vue from "vue";

require('./bootstrap');

// Vue
window.Vue = require('vue').default;
// store
import store from './store/index';
// мультиязычность
import './ml';
// плавная прокрутка
import VueScrollTo from 'vue-scrollto'
Vue.use(VueScrollTo)
import VueAnimate from 'vue-animate-scroll'
Vue.use(VueAnimate, { animateClass: 'animate-vue', activeClass: 'animate-scroll' })

Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('dark-mode', require('./components/DarkMode.vue').default);


const app = new Vue({
    el: '#app',
    store
});
