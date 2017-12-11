import Vue from 'vue'
import App from './App.vue'
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
import router from './router/index'
import Vuex from 'vuex'
import jquery from 'jquery'


import store from './vuex/store'

Vue.use(ElementUI)
Vue.use(Vuex)

var store = new Vuex.Store({
 state: {
    user_tel: ''
 }
})

new Vue({
  el: '#app',
  router,
  store_wy,
  render: h => h(App)
})
