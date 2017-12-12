<template>
    <div class="main_fd_order">
        <div id="header">
            <div class="header_my">
                <div class="head_l"><i class="el-icon-bell"></i></div>
                <div class="head_r"><i class="el-icon-setting"></i></div>
            </div>
        </div>
        <div id="main">
            <div class="main_header">
                <a><img src="../../assets/logo_wy.png" alt=""></a>
                <a><span>登录/注册</span></a>
            </div>
            <div class="main_con">
                <ul>
                    <li>
                        <i class="el-icon-printer"></i>
                        <span>我的订单</span>
                        <i class="el-icon-arrow-right"></i>
                    </li>
                </ul>
            </div>
            <div class="main_footer">
                <i class="el-icon-refresh"></i>
                <span>切换为房客</span>
            </div>
        </div>
    </div>
</template>

<script>
    import './my_wy.scss'

    export default {
        name: 'nav',
        components: {
        }
    }
</script>

