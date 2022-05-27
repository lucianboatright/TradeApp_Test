require('./bootstrap');
import router from './routes.js'


import axios from 'axios'
import VueAxios from 'vue-axios'

window.Vue = require('vue').default;
import AppComponent from './pages/AppComponent'
import Vue from 'vue';

// Vue.component('messageForm', require('./components/messageForm.vue'))
// Vue.component('')

Vue.use(VueAxios, axios)
Vue.config.productionTip = false


const app = new Vue({
    components: { AppComponent },
    router,
}).$mount('#app');
