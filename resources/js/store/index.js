import Vue from 'vue';
import Vuex from 'vuex';
import Axios from 'axios';

import theme from './theme'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        theme
    }
})
