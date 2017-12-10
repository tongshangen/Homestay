import Vue from 'vue'
import App from './App.vue'
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
import router from './router/index'
import jquery from 'jquery'



Vue.use(ElementUI)

new Vue({
  el: '#app',
  router,
  render: h => h(App)
})
