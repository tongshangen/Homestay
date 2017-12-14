import Vue from 'vue';
import VueRouter from 'vue-router';

import MainComponent from '../components/main/MainComponent.vue'
import HouselistComponent from '../components/houselist/houselist.vue'
import HousedetailsComponent from '../components/housedetails/housedetails.vue'
import LoginComponent from '../components/login/login.vue'
import RegisterComponent from '../components/register/register.vue'

import Main_wyComponent from '../components/main_wy/main_wy.vue'
import AddHouseComponent from '../components/addhouse/addhouse.vue'
import AddNewHouseComponent from '../components/addnewhouse/addnewhouse.vue'
import AddHouseLocationComponent from '../components/addhouselocation/addhouselocation.vue'
import EditHouseComponent from '../components/edithouse/edithouse.vue'
import HouseDescribeComponent from '../components/housedescribe/housedescribe.vue'
import HouseinfoComponent from '../components/houseinfo/houseinfo.vue'
import HousepriceComponent from '../components/houseprice/houseprice.vue'
import HousefacilityComponent from '../components/housefacility/housefacility.vue'
import MyhouseComponent from '../components/myhouse/myhouse.vue'

import DataComponent from '../components/data/data.vue'
import ListComponent from '../components/houselist/list.vue';
import RegionComponent from '../components/region/region.vue';
import FiltrateComponent from '../components/filtrate/filtrate.vue';
import SortComponent from '../components/sort/sort.vue';
import DestinationComponent from '../components/destination/destination.vue';

// import LoginComponent from '../components/login/login.vue';
// import RegisterComponent from '../components/register/register.vue';
import MyorderComponent from '../components/myorder/myorder.vue'
import UserComponent from '../components/user/user.vue'
import HouseorderDetailsComponent from '../components/houseorderDetails/houseorderDetails.vue'
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
            path: '/user',
            name: 'user',
            component: UserComponent
        },
        {
            path: '/destination',
            name: 'destination',
            component: DestinationComponent
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
            path: '/main_wy',
            name: 'main_wy',
            component: Main_wyComponent
        },
        {
            path: '/addhouse',
            name: 'addhouse',
            component: AddHouseComponent
        },
        {
            path: '/addnewhouse',
            name:'addnewhouse',
            component: AddNewHouseComponent
        },
        {
            path: '/addhouselocation',
            name:'addhouselocation',
            component: AddHouseLocationComponent
        },
        {
            path: '/edithouse',
            name:'edithouse',
            component: EditHouseComponent
        },
        {
            path: '/housedescribe',
            name:'housedescribe',
            component: HouseDescribeComponent
        },
        {
            path:'/houseinfo',
            name: 'houseinfo',
            component:HouseinfoComponent
        },
        {
            path:'/houseprice',
            name: 'houseprice',
            component:HousepriceComponent
        },
        {
            path:'/housefacility',
            name: 'housefacility',
            component:HousefacilityComponent
        },
        {
            path:'/myhouse',
            name: 'myhouse',
            component:MyhouseComponent
        },
        {
            path:'/myorder',
            name: 'myorder',
            component:MyorderComponent
        },
        {
            path: '/houseorderDetails',
            name: 'houseorderDetails',
            component: HouseorderDetailsComponent
        }
    ]
})

export default router;