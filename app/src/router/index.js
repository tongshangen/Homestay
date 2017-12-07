import Vue from 'vue';
import VueRouter from 'vue-router';

import MainComponent from '../components/main/MainComponent.vue'
import HouselistComponent from '../components/houselist/houselist.vue'
import HousedetailsComponent from '../components/housedetails/housedetails.vue'
import LoginComponent from '../components/login/login.vue'
import RegisterComponent from '../components/register/register.vue'

import Main_fd_orderComponent from '../components/main_fd_order/main_fd_order.vue'
import Message_wyComponent from '../components/message_wy/message_wy.vue'
import House_wyComponent from '../components/house_wy/house_wy.vue'
import My_wyComponent from '../components/my_wy/my_wy.vue'

Vue.use(VueRouter);

var router = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'main',
            component: MainComponent
        },
        {
            path: '/houselist',
            name: 'houselist',
            component: HouselistComponent
        },
        {
            path: '/housedetails',
            name: 'housedetails',
            component: HousedetailsComponent
        },
        {
            path: '/register',
            name: 'register',
            component: RegisterComponent,
        },
        {
            path: '/login',
            name: 'login',
            component: LoginComponent,
        },
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