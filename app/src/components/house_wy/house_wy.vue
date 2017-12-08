<template>
    <div class="main_fd_order">
        <div id="header">
            <div class="header_house">
                <h3>我的房源<span>添加</span></h3>
            </div>
        </div>
        <div id="nav">
            <Nav_house_wy></Nav_house_wy>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    import './house_wy.scss'
    import Nav_house_wy from '../nav_house_wy/nav_house_wy.vue'

    export default {
        name: 'nav',
        components: {
            Nav_house_wy
        }
    }
</script>

