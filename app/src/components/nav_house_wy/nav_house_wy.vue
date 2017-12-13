<template>
  <el-tabs v-model="activeName" @tab-click="handleClick">
    <el-tab-pane label="全部" name="first"></el-tab-pane>
    <el-tab-pane label="已通过审核" name="second"></el-tab-pane>
    <el-tab-pane label="未通过审核" name="third"></el-tab-pane>
  </el-tabs>
</template>

<script>
    import './nav_house_wy.scss'

    export default {
        data() {
        return {
            activeName: 'first'
        };
        },
        methods: {
        handleClick(tab, event) {
            // console.log(tab, event);
        }
        }
    };
</script>