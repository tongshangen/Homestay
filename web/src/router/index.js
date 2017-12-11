import Vue from 'vue';
import VueRouter from 'vue-router';

import MainComponent from '../components/main/MainComponent.vue'
import ProductComponent from '../components/product/product.vue'
import GoodComponent from '../components/good/good.vue'

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
                }

            ]
        }
    ]
})

export default router;