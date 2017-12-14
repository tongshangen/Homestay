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
                <a><span>{{login}}</span></a>
            </div>
            <div class="main_con">
                <ul>
                    <li @click="order">
                        <i class="el-icon-printer"></i>
                        <span>我的订单</span>
                        <i class="el-icon-arrow-right"></i>
                    </li>
                </ul>
            </div>
            <div class="main_footer" @click="checkout">
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
        data: function(){
            return{
                login:'登录/注册'
            }
        },
        methods: {
            checkout: function(){
                this.$router.push({path:'/'});
            },
            order: function(){
                this.$router.push({name:'main_wy'});
            }
        },
        mounted: function(){
            var s = sessionStorage.getItem("name");
            if(s){
                this.login = '已登录';
            }else{
                this.$router.push({name:'login'});
            }
        }
    }
</script>

