import Vue from 'vue'
import App from './App.vue'
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
import router from './router/index'


Vue.use(ElementUI)


// 创建高德地图
let createMap = () => {
    const promise = new Promise(function(resolve, reject) {
        let script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://webapi.amap.com/maps?v=1.4.0&key=5d8a6e08be3b82046010a246943597fa'
        document.body.appendChild(script);
        if (script.nodeName === 'SCRIPT') {
            resolve();
        } else {
            reject(new Error('Could not script image at' + script.src))
        }
    })
    return promise;
}
createMap().then(function() {
    console.log('读取高德地图成功')
}).catch(function(error) {
    console.log('发生错误!', error)
})
new Vue({
    el: '#app',
    router,
    render: h => h(App)
})