<template>
	<div class="Main">
        <div class="top">
            <header>
               <router-link to="/houselist/list"><i class="el-icon-back"> </i></router-link>
                <h3>北京</h3>
            </header>
            <div class="manues">
                <ul>
                    <li @click="data"><router-link to="/houselist/data">日期<i class="el-icon-arrow-down"></i></router-link></li>
                    <li @click="data"><router-link to="/houselist/region">区域<i class="el-icon-arrow-down"></i></router-link></li>
                    <li @click="data"><router-link to="/houselist/filtrate">筛选<i class="el-icon-arrow-down"></i></router-link></li>
                    <li @click="data"><router-link to="/houselist/sort">排序<i class="el-icon-arrow-down"></i></router-link></li>

                </ul>
            </div>
        </div>
        <router-view></router-view>
	</div>
</template>
<script>
    import './houselist.scss';

    export default {
        methods:{
            data:function(){
                console.log(666);
            }
        }
    }

</script>