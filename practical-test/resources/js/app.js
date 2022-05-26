require('./bootstrap');
import router from './routes.js'

window.Vue = require('vue').default;
import AppComponent from './pages/AppComponent'
import Vue from 'vue';

// Vue.component('messageForm', require('./components/messageForm.vue'))
// Vue.component('')


const app = new Vue({
    components: { AppComponent },
    router,
}).$mount('#app');
