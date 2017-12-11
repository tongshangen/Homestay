import Vue from 'vue';
import VueRouter from 'vue-router';

import MainComponent from '../components/main/MainComponent.vue'
import LoginComponent from '../components/login/login.vue'
import RegisterComponent from '../components/register/register.vue'

Vue.use(VueRouter);

var router = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'main',
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
        }
    ]
})

export default router;