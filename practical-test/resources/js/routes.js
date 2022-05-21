import Vue from 'vue'
import VueRouter from 'vue-router'
// import { component } from 'vue/types/umd'
import Home from './components/Home'
import SignUpForm from './components/SignUpForm'
Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home,
  },
  {
    path: '/signupform',
    name: 'signUpForm',
    component: SignUpForm,
  }
]

const router = new VueRouter({
    mode: 'history',
    routes
  })

  export default router