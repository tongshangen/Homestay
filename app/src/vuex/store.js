import Vue from 'vue'
import Vuex from 'vuex'

import housedes from '../components/housedescribe/housedescribe'
import houseinfo from '../components/houseinfo/houseinfo'
import houseprice from '../components/houseprice/houseprice'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        housedes,
        houseinfo,
        houseprice
    }
})
