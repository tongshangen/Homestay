<template>
    <div class="main_fd_order">
        <div class="header">
            <div class="header_order">
                <h3>订单管理</h3>
            </div>
        </div>
        <div class="nav">
            <Nav_wy></Nav_wy>
            <router-view></router-view>
        </div>
        <div class="main_order">
            <Myorder></Myorder>
        </div>
    </div>
</template>

<script>
    import './main_fd_order.scss'
    import Nav_wy from '../nav_wy/nav_wy.vue'
    import Myorder from '../myorder/myorder.vue'

    export default {
        name: 'nav',
        components: {
            Nav_wy,
            Myorder
        }
    }
</script>

