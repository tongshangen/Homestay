import Vue from 'vue';
import VueRouter from 'vue-router';

// import MainComponent from '../components/main/MainComponent.vue'
// import ProductComponent from '../components/product/product.vue'
// import GoodComponent from '../components/good/good.vue'

import Main_fd_orderComponent from '../components/main_fd_order/main_fd_order.vue'
import Message_wyComponent from '../components/message_wy/message_wy.vue'
import House_wyComponent from '../components/house_wy/house_wy.vue'
import My_wyComponent from '../components/my_wy/my_wy.vue'

Vue.use(VueRouter);

var router = new VueRouter({
    routes: [
        // {
        //     path: '/',
        //     name: 'main',
        //     component: MainComponent,
        //     children:[
        //         {
        //             path: '/product',
        //             name: 'product',
        //             component: ProductComponent 
        //         },
        //         {
        //             path: '/good',
        //             name: 'good',
        //             component: GoodComponent 
        //         }

        //     ]
        // }

        {
            path: '/main_fd_order',
            name: 'main_fd_order',
            component: Main_fd_orderComponent
        },
        {
            path: '/message_wy',
            name: 'message_wy',
            component: Message_wyComponent
        },
        {
            path: '/house_wy',
            name: 'house_wy',
            component: House_wyComponent
        },
        {
            path: '/my_wy',
            name: 'my_wy',
            component: My_wyComponent
        }
    ]
})

export default router;