// import Vue from "vue";

require('./bootstrap');

// Vue
window.Vue = require('vue').default;
// store
import store from './store/index';
// валидатор форм
import Vuelidate from 'vuelidate';
Vue.use(Vuelidate);
// мультиязычность
import './ml';
// плавная прокрутка
import VueScrollTo from 'vue-scrollto'
Vue.use(VueScrollTo)
import VueAnimate from 'vue-animate-scroll'
Vue.use(VueAnimate, { animateClass: 'animate-vue', activeClass: 'animate-scroll' })

Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('dark-mode', require('./components/DarkMode.vue').default);
Vue.component('smpl-button', require('./components/SimpleButton.vue').default);
Vue.component('lead-form', require('./components/LeadForm.vue').default);


const app = new Vue({
    el: '#app',
    store
});
