<template>
    <div class="main_fd_order">
        <div id="header">
            <div class="header_house">
                <h3>我的房源<span @click="addhouse">添加</span></h3>
            </div>
        </div>
        <div id="nav_house">
            <Nav_house_wy></Nav_house_wy>
            <router-view></router-view>
        </div>
        <div id="main_house">
            <Main_house></Main_house>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    import './house_wy.scss'
    import Nav_house_wy from '../nav_house_wy/nav_house_wy.vue'
    import Main_house from '../myhouse/myhouse.vue'

    export default {
        name: 'nav',
        components: {
            Nav_house_wy,
            Main_house
        },
        methods: {
            addhouse: function(){
                var s = sessionStorage.getItem("name");
                console.log(s);
                if(s == null){
                    this.$router.push({name:'login'});
                }else {
                    this.$router.push({name:'addhouse'});
                }
                
            }
        }
    }
</script>

