import Vue from 'vue'
import App from './App.vue'
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
import router from './router/index'
import Vuex from 'vuex'
import jquery from 'jquery'


<<<<<<< HEAD

import store from './vuex/store'

=======
>>>>>>> 30ed9d73cef3716df630c1fae16e3e49fe9fb37b
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
  store,
  render: h => h(App)
})
