<template>
  <div class="Filtrate">
    <el-checkbox-group v-model="checkList">
      <el-checkbox label="整套"></el-checkbox>
      <el-checkbox label="单间"></el-checkbox>
      <el-checkbox label="合住"></el-checkbox>
    </el-checkbox-group>
    <el-input-number v-model="num1" @change="handleChange" :min="1" :max="10" label="描述文字"></el-input-number>

    <el-select v-model="value" placeholder="请选择">
      <el-option
        v-for="item in options"
        :key="item.value"
        :label="item.label"
        :value="item.value">
      </el-option>
    </el-select>
  </div>
</template>

<script>
  export default {
    data () {
      return {
        checkList: ['选中且禁用','复选框 A'],
         num1: 1,
         options: [{
            value: '选项1',
            label: '黄金糕'
          }, {
            value: '选项2',
            label: '双皮奶'
          }, {
            value: '选项3',
            label: '蚵仔煎'
          }, {
            value: '选项4',
            label: '龙须面'
          }, {
            value: '选项5',
            label: '北京烤鸭'
          }],
        value: ''
      };
    },
     methods: {
        handleChange(value) {
          console.log(value);
        }
    }
  };
</script>
