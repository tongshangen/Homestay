const state = {
    hx: '',
    area:'',
    peoplenum:null,
    daynum:null,
    wcnum:null,
    bednum:null,
    staytime:'',
    leavetime:''
}

const mutations = {
    increment: function(){
        // console.log('increment');
        // state.count++;
        // return false;
    }
}

const actions = {
    increment: function(context){
        context.commit('increment');
    }
}

export default {
    state,
    mutations,
    actions
}