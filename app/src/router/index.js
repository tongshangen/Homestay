import Vue from 'vue';
import VueRouter from 'vue-router';

import MainComponent from '../components/main/MainComponent.vue'
import HouselistComponent from '../components/houselist/houselist.vue'
import HousedetailsComponent from '../components/housedetails/housedetails.vue'
import LoginComponent from '../components/login/login.vue'
import RegisterComponent from '../components/register/register.vue'

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
        }
    ]
})

export default router;