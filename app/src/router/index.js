import Vue from 'vue';
import VueRouter from 'vue-router';

import MainComponent from '../components/main/MainComponent.vue'
import HouselistComponent from '../components/houselist/houselist.vue'
import HousedetailsComponent from '../components/housedetails/housedetails.vue'

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
        }
    ]
})

export default router;