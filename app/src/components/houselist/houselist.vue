<template>
	<div class="Main">
        <div class="top">
            <header>
<<<<<<< HEAD
               <router-link to="/houselist/list"><i class="el-icon-back"> </i></router-link>
                <h3>北京</h3>
            </header>
            <div class="manues">
                <ul>
                    <li @click="data"><router-link to="/houselist/data">日期<i class="el-icon-arrow-down"></i></router-link></li>
                    <li @click="data"><router-link to="/houselist/region">区域<i class="el-icon-arrow-down"></i></router-link></li>
                    <li @click="data"><router-link to="/houselist/filtrate">筛选<i class="el-icon-arrow-down"></i></router-link></li>
                    <li @click="data"><router-link to="/houselist/sort">排序<i class="el-icon-arrow-down"></i></router-link></li>
=======
               <!-- <router-link to="/houselist/list"><i class="el-icon-back" @click="aa"> </i></router-link> -->
               <i class="el-icon-back" @click="back"> </i>
                <h3>{{ reg }}</h3>
            </header>
            <div class="manues">
                <ul>
                    <li><router-link to="/houselist/data">日期<i class="el-icon-arrow-down"></i></router-link></li> 
                    <li><router-link :to="{name:'region',query: {reg: reg }}">区域<i class="el-icon-arrow-down"></i></router-link></li>
                    <li><router-link :to="{name: 'filtrate'}">筛选<i class="el-icon-arrow-down"></i></router-link></li>
                    <li><router-link to="/houselist/sort">排序<i class="el-icon-arrow-down"></i></router-link></li>
>>>>>>> 78a2fd3e8df69978375b9ff49437999c68691dcf
                </ul>
            </div>
        </div>
        <router-view></router-view>
	</div>
</template>
<script>
  
    import './houselist.scss';

    export default {
<<<<<<< HEAD
        methods:{
            data:function(){
                // console.log(666);
               
            }
        },
=======
        data:function(){
            return {
                reg:'',
            }
        },
        methods:{
            back:function(){
                // console.log(this.$route.path)
                if(this.$route.path=='/houselist/list'){
                    this.$router.push({name:'main'})
                }else{
                    this.$router.push({name:'list'})
                }
            }
        },
        mounted: function(){
            this.reg = this.$route.query.room_position;
        }   
>>>>>>> 78a2fd3e8df69978375b9ff49437999c68691dcf
    }

</script>