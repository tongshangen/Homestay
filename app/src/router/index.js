import Vue from 'vue';
import VueRouter from 'vue-router';

import MainComponent from '../components/main/MainComponent.vue'
import HouselistComponent from '../components/houselist/houselist.vue'
import HousedetailsComponent from '../components/housedetails/housedetails.vue'
<<<<<<< HEAD
=======
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

>>>>>>> 78a2fd3e8df69978375b9ff49437999c68691dcf
import DataComponent from '../components/data/data.vue'
import ListComponent from '../components/houselist/list.vue';
import RegionComponent from '../components/region/region.vue';
import FiltrateComponent from '../components/filtrate/filtrate.vue';
import SortComponent from '../components/sort/sort.vue';
<<<<<<< HEAD
import HouseorderDetailsComponent from '../components/houseorderDetails/houseorderDetails.vue'
=======
import DestinationComponent from '../components/destination/destination.vue';
// import LoginComponent from '../components/login/login.vue';
// import RegisterComponent from '../components/register/register.vue';
import MyorderComponent from '../components/myorder/myorder.vue'
>>>>>>> 78a2fd3e8df69978375b9ff49437999c68691dcf

Vue.use(VueRouter);

var router = new VueRouter({
<<<<<<< HEAD
    routes: [{
=======
    routes: [
        {
>>>>>>> 78a2fd3e8df69978375b9ff49437999c68691dcf
            path: '/',
            name: 'main',
            component: MainComponent
        },
        {
            path: '/houselist',
            name: 'houselist',
<<<<<<< HEAD
            component: HouselistComponent,
            children: [{
                    path: 'data',
                    name: 'data',
                    component: DataComponent
=======
            component:HouselistComponent,
            children:[
                {
                    path: 'data',
                    name: 'data',
                    component: DataComponent 
>>>>>>> 78a2fd3e8df69978375b9ff49437999c68691dcf
                },
                {
                    path: 'list',
                    name: 'list',
<<<<<<< HEAD
                    component: ListComponent
=======
                    component: ListComponent 
>>>>>>> 78a2fd3e8df69978375b9ff49437999c68691dcf
                },
                {
                    path: 'region',
                    name: 'region',
<<<<<<< HEAD
                    component: RegionComponent
=======
                    component: RegionComponent 
>>>>>>> 78a2fd3e8df69978375b9ff49437999c68691dcf
                },
                {
                    path: 'filtrate',
                    name: 'filtrate',
<<<<<<< HEAD
                    component: FiltrateComponent
=======
                    component: FiltrateComponent 
>>>>>>> 78a2fd3e8df69978375b9ff49437999c68691dcf
                },
                {
                    path: 'sort',
                    name: 'sort',
<<<<<<< HEAD
                    component: SortComponent
                }
            ]
=======
                    component: SortComponent 
                }
            ] 
>>>>>>> 78a2fd3e8df69978375b9ff49437999c68691dcf
        },
        {
            path: '/housedetails',
            name: 'housedetails',
            component: HousedetailsComponent
        },
        {
<<<<<<< HEAD
            path: '/houseorderDetails',
            name: 'houseorderDetails',
            component: HouseorderDetailsComponent
=======
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
>>>>>>> 78a2fd3e8df69978375b9ff49437999c68691dcf
        }
    ]
})

export default router;