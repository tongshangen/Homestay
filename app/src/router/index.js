import Vue from 'vue';
import VueRouter from 'vue-router';


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

Vue.use(VueRouter);

var router = new VueRouter({
    routes: [
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
        }
        
    ]
})

export default router;