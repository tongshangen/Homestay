<template>
  <el-tabs v-model="activeName" @tab-click="handleClick">
    <el-tab-pane label="全部" name="first"></el-tab-pane>
    <el-tab-pane label="待确认" name="second"></el-tab-pane>
    <el-tab-pane label="待付款" name="third"></el-tab-pane>
    <!-- <el-tab-pane label="待入住" name="fourth"></el-tab-pane>
    <el-tab-pane label="已入住" name="five"></el-tab-pane>
    <el-tab-pane label="待评价" name="six"></el-tab-pane>
    <el-tab-pane label="已评价" name="seven"></el-tab-pane>
    <el-tab-pane label="退款中" name="eight"></el-tab-pane>
    <el-tab-pane label="已取消" name="nine"></el-tab-pane>
    <el-tab-pane label="已失效" name="ten"></el-tab-pane>
    <el-tab-pane label="已退款" name="eleven"></el-tab-pane> -->
  </el-tabs>
</template>

<script>
    import './nav_wy.scss'

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