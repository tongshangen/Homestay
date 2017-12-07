<template>
    <div class="footer">
        <ul>
            <li @click="active($event)" :class = activeName><i class="el-icon-document"></i>订单</li>
            <li @click="active($event)" :class = activeName><i class="el-icon-message"></i>消息</li>
            <li @click="active($event)" :class = activeName><i class="el-icon-location"></i>房源</li>
            <li @click="active($event)" :class = activeName><i class="el-icon-location"></i>我的</li>
        </ul> 
    </div>
</template>

<script>

    import './footer_wy.scss'
    export default {
        data: function(){
            return {
                activeName: ''
            }
        },
        methods: {
            active(event){
                console.log(event.currentTarget);
                event.currentTarget.className = 'active';
            }
        }
    }
</script>

