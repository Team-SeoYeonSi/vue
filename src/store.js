import Vuex from 'vuex';
import Vue from 'vue';
import axios from 'axios';

Vue.use(Vuex); // this.$store
Vue.use(axios); // this.$axios
Vue.prototype.$http = axios;

export const CHECK_USER = 'CHECK_USER';


export default new Vuex.Store({ // import store from './store';
    //vuex의 4가지 핵심 : state, mutations, getters, actions
    state: { // vue의 data와 비슷
        userId: '',
        logined: false,

    },
    getters: { // vue의 computed와 비슷
    },
    mutations: { // state를 수정할 때 사용, 동기적으로
        [CHECK_USER](state){

        },
        
    },
    actions: { // 비동기를 사용할 때, 또는 여러 mutations를 연달아 실행할 때
    },
});