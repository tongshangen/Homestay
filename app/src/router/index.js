import Vue from 'vue';
import VueRouter from 'vue-router';

import MainComponent from '../components/main/MainComponent.vue'
<<<<<<< HEAD
import HouselistComponent from '../components/houselist/houselist.vue'
import HousedetailsComponent from '../components/housedetails/housedetails.vue'
=======
import LoginComponent from '../components/login/login.vue'
import RegisterComponent from '../components/register/register.vue'
>>>>>>> 5b2e4ae7c6c3dbcb58a2bd5eebd03c84366f839c

Vue.use(VueRouter);

var router = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'main',
<<<<<<< HEAD
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
=======
            component: MainComponent,
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
>>>>>>> 5b2e4ae7c6c3dbcb58a2bd5eebd03c84366f839c
        }
    ]
})

export default router;