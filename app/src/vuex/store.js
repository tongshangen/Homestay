
import Vue from 'vue'
import Vuex from 'vuex'

import housedes from '../components/housedescribe/housedescribe'
import houseinfo from '../components/houseinfo/houseinfo'
import houseprice from '../components/houseprice/houseprice'
import houselocation from '../components/addhouselocation/addhouselocation'
import housefacility from '../components/housefacility/housefacility'
import addnewhouse from '../components/addnewhouse/addnewhouse'
import login from '../components/login/login'

Vue.use(Vuex)



export default new Vuex.Store({
    modules: {
        housedes,
        houseinfo,
        houseprice,
        houselocation,
        housefacility,
        addnewhouse,
        login
    }
})
// import Vue from 'vue';
// import Vuex from 'vuex';

// import login from '../components/login/login'

// export default new Vuex.Store({
//     modules: {
//         login
//     }
// })
