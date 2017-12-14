<template>
  <div class="Filtrate">
      <div class="fil">
        <h3>房源类型</h3>
        <el-radio-group v-model="radio2" class="type">
          <el-radio :label="1">整套</el-radio>
          <el-radio :label="2">单间</el-radio>
          <el-radio :label="3">合住</el-radio>
        </el-radio-group>
        <h3>房客人数</h3>
        <el-input-number v-model="max_people" @change="handleChange" :min="0" :max="10" label="描述文字" class="count"></el-input-number>
        <h3>价格范围{{value1}}元</h3>
        <div class="block">
          <el-slider v-model="value1" range show-stops  :max="1500"  @change="handleChange"> </el-slider>
        </div>
        <h3>房间和床位</h3>
        <div class="rooms">
          <p>卧室</p>
          <el-input-number v-model="bedroom" @change="handleChange" :min="0" :max="10" label="卧室" class="count bed"></el-input-number>
        </div>
        
        <div class="rooms">
          <p>床</p>
          <el-input-number v-model="bed" @change="handleChange" :min="0" :max="10" label="床" class="count bed"></el-input-number>
        </div>
        
        <div class="rooms">
          <p>独立卫生间</p>
          <el-input-number v-model="wc" @change="handleChange" :min="0" :max="10" label="独立卫生间" class="count bed"></el-input-number>
        </div>
          <h3>配套设施</h3>
          <el-checkbox-group  v-model="devList">
            <el-checkbox label="热水淋浴" class="dev"></el-checkbox>
            <el-checkbox label="空调" class="dev"></el-checkbox>
            <el-checkbox label="厨房" class="dev"></el-checkbox>
            <el-checkbox label="暖气" class="dev"></el-checkbox>
            <el-checkbox label="电视机" class="dev"></el-checkbox>
            <el-checkbox label="无线网络" class="dev"></el-checkbox>
            <el-checkbox label="洗浴用品" class="dev"></el-checkbox>
            <el-checkbox label="早餐" class="dev"></el-checkbox>
            <el-checkbox label="可携带小孩" class="dev"></el-checkbox>
          </el-checkbox-group>
      </div>
      <div class="btns">
        <el-button @click="cancel">重置</el-button>
        <el-button type="warning" @click="confirm">确定</el-button>
      </div>
  </div>
</template>

<script>
  import  './filtrate.scss'
  export default {
    data () {
      return {
        radio2: 0,
        max_people: 0,
        bedroom:0,
        bed: 0,
        wc: 0,
        value: '',
        devList: [],
        value1: [0, 1500],
        prop:{}
      };
    },
    methods: {
        handleChange(value) {
          // console.log(value);
        },
        confirm:function(){
          console.log(this.radio2)
          if(this.radio2 !=0){
            this.prop['room_type']= this.radio2;
          }
          if(this.max_people !=0){
            this.prop['max_people'] = this.max_people;
          }
          if(this.bedroom !=0){
            this.prop['bedroom']= this.bedroom;
          }
          if(this.bed !=0){
            this.prop['bed']=this.bed;
          }
          if(this.wc !=0){
            this.prop['wc']=this.wc;
          }
          if(this.devList !=0){
            this.prop['device']=this.devList;
          }

          this.prop['price1'] = this.value1[0];
          this.prop['price2'] = this.value1[1];
          console.log(this.prop)
          // this.$router.push({name: 'list',query: {room_type: this.radio2,max_people: this.max_people,bedroom:this.bedroom,bed:this.bed,wc:this.wc,device:this.devList}});
          this.$router.push({name: 'list',query:this.prop});
        },
        cancel:function(){
            this.radio2=0,
            this.max_people= 0,
            this.bedroom=0,
            this.bed=0,
            this.wc=0,
            this.value='',
            this.devList= [],
            this.value1=[0, 1500],
            this.prop={}
        }
    },
    mounted:function(){
        console.log(this.radio2)
    }
  };
</script>
