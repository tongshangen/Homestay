import Vue from 'vue';
import VueRouter from 'vue-router';

import MainComponent from '../components/main/MainComponent.vue'
import HouselistComponent from '../components/houselist/houselist.vue'
import HousedetailsComponent from '../components/housedetails/housedetails.vue'
import DataComponent from '../components/data/data.vue'
import ListComponent from '../components/houselist/list.vue';
import RegionComponent from '../components/region/region.vue';
import FiltrateComponent from '../components/filtrate/filtrate.vue';
import SortComponent from '../components/sort/sort.vue';
import DestinationComponent from '../components/destination/destination.vue';

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
            component:HouselistComponent,
            children:[
                {
                    path: 'data',
                    name: 'data',
                    component: DataComponent 
                },
                {
                    path: 'list',
                    name: 'list',
                    component: ListComponent 
                },
                {
                    path: 'region',
                    name: 'region',
                    component: RegionComponent 
                },
                {
                    path: 'filtrate',
                    name: 'filtrate',
                    component: FiltrateComponent 
                },
                {
                    path: 'sort',
                    name: 'sort',
                    component: SortComponent 
                }
            ] 
        },
        {
            path: '/housedetails',
            name: 'housedetails',
            component: HousedetailsComponent
        },
        {
            path: '/destination',
            name: 'destination',
            component: DestinationComponent
        }
    ]
})

export default router;