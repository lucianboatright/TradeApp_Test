require('./bootstrap');
import router from './routes.js'

window.Vue = require('vue').default;
import AppComponent from './components/AppComponent'


const app = new Vue({
    components: { AppComponent },
    router,
}).$mount('#app');
