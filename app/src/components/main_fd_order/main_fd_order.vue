<template>
    <div class="main_fd_order">
        <div id="header">
            <div class="header_order">
                <h3>订单管理</h3>
            </div>
        </div>
        <div id="nav">
            <Nav_wy></Nav_wy>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    import './main_fd_order.scss'
    import Nav_wy from '../nav_wy/nav_wy.vue'

    export default {
        name: 'nav',
        components: {
            Nav_wy
        }
    }
</script>

