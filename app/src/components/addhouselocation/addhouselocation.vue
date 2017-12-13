<template>
    <div>
         <div id="header_loc">
            <span><i class="el-icon-back" @click="back"></i></span>
            <a @click="next">下一步</a>
        </div>
        <div id="main_loc">
            <h3>房源位置</h3>
            <input type="text" name="" id="" v-model="city">
            <h3>房源附近</h3>
            <input type="text" name="" id="" v-model="near">
        </div>
    </div>
</template>

<script>
    import './addhouselocation.scss'
    export default {
        data: function(){
            return {
                city:'广州',
                near:'医院'
            }
        },
        methods: {
            back: function(){
                history.back();
            },
            next: function(){
                this.$store.state.houselocation.city = this.city;
                localStorage.setItem('city',this.city);
                this.$store.state.houselocation.near = this.near;
                localStorage.setItem('nearby',this.near);
                this.$router.push({name:'edithouse'});
            }
        }
    }
</script>

