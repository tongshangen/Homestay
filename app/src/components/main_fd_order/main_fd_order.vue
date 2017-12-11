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
            <ul>
                <li>
                    <div class="order_header">
                        <h3>香奈儿</h3>
                    </div>
                    <div class="order_main">
                        <div class="order_main_l">
                            <p>11月12日-11月14日</p>
                            <p>总价：<span><i>￥</i>312</span></p>
                        </div>
                        <div class="order_main_r">
                            <img src="../../assets/nav_logo.png" alt="">
                        </div>
                    </div>
                    <div class="order_footer"></div>
                </li>
                <li>
                    <div class="order_header">
                        <h3>香奈儿</h3>
                    </div>
                    <div class="order_main">
                        <div class="order_main_l">
                            <p>11月12日-11月14日</p>
                            <p>总价：<span><i>￥</i>312</span></p>
                        </div>
                        <div class="order_main_r">
                            <img src="../../assets/nav_logo.png" alt="">
                        </div>
                    </div>
                    <div class="order_footer"></div>
                </li>
            </ul>
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

