<template>
  <div id="app">
<<<<<<< HEAD
=======
    <MainComponent></MainComponent>

    <!--  下面div为测试能否引入element.ui 记得删除 
    <div>
      <el-button round>圆形按钮</el-button>
      <el-button type="primary" round>主要按钮</el-button>
      <el-button type="success" round>成功按钮</el-button>
      <el-button type="info" round>信息按钮</el-button>
      <el-button type="warning" round>警告按钮</el-button>
      <el-button type="danger" round>危险按钮</el-button>
    </div>-->
>>>>>>> 7e643216153cc9c33438de569b538db9aea2d246
    <router-view></router-view>
  </div>
</template>

<script>
<<<<<<< HEAD
export default {
  name: 'app',
  data () {
    return {

    }
=======
  import MainComponent from "./components/main/MainComponent.vue"
  export default {
    name: 'app',
    data () {
      return {}
    },
    components: {
        MainComponent
      }
>>>>>>> 7e643216153cc9c33438de569b538db9aea2d246
  }
</script>
