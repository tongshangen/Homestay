<template>
    <div>
         <div id="header">
            <span><i class="el-icon-back" @click="back"></i></span>
            <a @click="next">下一步</a>
        </div>
        <div id="main">
            <h3>房源位置</h3>
        </div>
    </div>
</template>

<script>
    import './addhouselocation.scss'
    export default {
        methods: {
            back: function(){
                history.back();
            },
            next: function(){
                this.$router.push({name:'edithouse'});
            }
        }
    }
</script>

