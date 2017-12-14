import Vue from 'vue';
import VueRouter from 'vue-router';

import MainComponent from '../components/main/MainComponent.vue'
import ProductComponent from '../components/product/product.vue'
import GoodComponent from '../components/good/good.vue'
import orderComponent from '../components/orders/orders.vue'
import userComponent from '../components/user/user.vue'
Vue.use(VueRouter);

var router = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'main',
            component: MainComponent,
            children:[
                {
                    path: '/product',
                    name: 'product',
                    component: ProductComponent 
                },
                {
                    path: '/good',
                    name: 'good',
                    component: GoodComponent 
                },
                 {
                    path: '/orders',
                    name: 'orders',
                    component: orderComponent 
                },
                {
                    path: '/user',
                    name: 'user',
                    component:userComponent
                }

            ]
        }
    ]
})

export default router;