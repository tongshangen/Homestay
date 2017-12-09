const state = {
    title: '',
    special:'',
    cont:''
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