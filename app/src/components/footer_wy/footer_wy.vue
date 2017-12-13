<template>
    <div class="footer">
        <ul>
            <li @click="toggleTabs('main_fd_order')" :class="main_fd_order"><i class="el-icon-document"></i>订单</li>
            <li @click="toggleTabs('message_wy')" :class="message_wy"><i class="el-icon-message"></i>消息</li>
            <li @click="toggleTabs('house_wy')" :class="house_wy"><i class="el-icon-location"></i>房源</li>
            <li @click="toggleTabs('my_wy')" :class="my_wy"><i class="el-icon-location"></i>我的</li>
        </ul> 
    </div>
</template>

<script>
    import './footer_wy.scss'

    export default {
        data: function() {
            return {
                main_fd_order: '',
                message_wy:'',
                house_wy:'',
                my_wy: ''
            };
        },
        methods: {
            toggleTabs(tabText){            
                this.$router.push({name:tabText});
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
        }
    }
</script>

