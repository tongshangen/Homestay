<div class="dial-header">
        <el-dialog title="请选择适配器" :visible.sync="showFlag" style="width:900px">
          <div style="text-align: left; margin: 0;width:400px;" >


            <div class="adp" v-for="adapter in adapters" style="width:300px;height:30px;line-height:30px;border-top:none;margin:0px 0px 0px 40px">
              <el-radio :label="adapter.ip" style="width:200px;padding-left:40px" v-model="radio"></el-radio>
              <div style="display: inline-block;width:30px"><img v-if="!adapter.val" src="../../static/images/grey.png"><img v-if="adapter.val" src="../../static/images/green.png"></div>
            </div>
            <div style="padding-top:20px;text-align: right">
              <el-button type="text" size="small" @click="showFlag = false">取消</el-button>
              <el-button type="primary" size="small" @click="radioEvent()">确定</el-button>
            </div>


          </div>
        </el-dialog>


        <el-button type="primary" @click="showFlag = true">选择</el-button>
      </div>
      <script>
  export default {
    data () {
      return {
        showFlag: false,
        radio:""
      }
    },
    methods:{
      radioEvent(){
        this.showFlag = false;
        this.adapterSelected = this.radio;
    },
}
</script>