<template>
    <div>
        <div class="top">
            <!-- 定义三个temp模板，用于切换 -->
            <!-- 动态地绑定到它的 is 特性，我们让多个组件可以使用同一个挂载点，并动态切换。如果把切换出去的组件保留在内存中，可以保留它的状态或避免重新渲染。为此可以添加一个 keep-alive 指令参数  -->
　　　　　　<main_fd_order :is="currentView" keep-alive></main_fd_order>
        </div>
        <div class="footer">
            <ul>
                <li @click="toggleTabs('main_fd_order')" :class="main_fd_order"><i class="el-icon-document"></i>订单</li>
                <li @click="toggleTabs('message_wy')" :class="message_wy"><i class="el-icon-message"></i>消息</li>
                <li @click="toggleTabs('house_wy')" :class="house_wy"><i class="el-icon-location"></i>房源</li>
                <li @click="toggleTabs('my_wy')" :class="my_wy"><i class="el-icon-location"></i>我的</li>
            </ul> 
            
        </div>
    </div>
</template>

<script>
    var wd = document.documentElement.clientWidth*window.devicePixelRatio/10;
    // document.getElementsByTagName("html")[0].style.fontSize = wd + "px";
    var scale = 1/window.devicePixelRatio;
    var mstr = 'initial-scale='+ scale +', maximum-scale='+ scale +', minimum-scale='+ scale +', user-scalable=no';
    document.getElementById("vp").content = mstr;

    import './main_wy.scss'

    // 导入子组件
    import main_fd_order from '../main_fd_order/main_fd_order.vue'
    import message_wy from '../message_wy/message_wy.vue'
    import house_wy from '../house_wy/house_wy.vue'
    import my_wy from '../my_wy/my_wy.vue'

    export default {
        data: function() {
            return {
                main_fd_order: 'active',
                message_wy:'',
                house_wy:'',
                my_wy: '',
                currentView:'main_fd_order'
            };
        },
        components:{
            main_fd_order,
            message_wy,
            house_wy,
            my_wy
        },
        methods: {
            toggleTabs(tabText){
                this.currentView = tabText;            
                // this.$router.push({name:tabText});
                this.main_fd_order = this.message_wy = this.house_wy = this.my_wy = '';
                if(tabText == 'main_fd_order'){
                    this.main_fd_order = 'active';
                }else if(tabText == 'message_wy'){
                    this.message_wy = 'active';
                }else if(tabText == 'house_wy'){
                    this.house_wy = 'active';
                }else if(tabText == 'my_wy'){
                    this.my_wy = 'active';
                }
            }
        },
        mounted: function(){
            
        }
    }
</script>

