<template>
    <div class="All">
        <div class="block">
            <span class="demonstration">入住日期：</span>
            <el-date-picker
            v-model="value8"
            type="date"
            placeholder="选择日期">
            </el-date-picker>
        </div>
        <div class="block">
            <span class="demonstration">退房日期：</span>
            <el-date-picker
            v-model="value9"
            type="date"
            placeholder="选择日期">
            </el-date-picker>
        </div>
        <p class="total">共<span v-text="res"></span>天</p>
        <div class="btn">
            <el-button type="info" @click="reset">重置</el-button>
            <el-button type="primary" @click="confirm">确定</el-button>
        </div>
        
    </div>
</template>
<script>
    import axios from 'axios';
    import qs from 'qs'
    import './data.scss'
    export default {
        data() {
            return {
                value8: '',
                value9: '',
                value7:0
            };
        },
        computed:{
            res:function(){
                this.value7=(this.value9-this.value8)/(24*60*60*1000)
                if(this.value7<-1){
                    return 0;
                }
                return this.value7;
            }
        },
        methods:{
            reset:function(){
                this.value8='';
                this.value9='';
            },
            confirm:function(){
                var y1 = this.value8.getFullYear();
                var m1 = this.value8.getMonth() + 1;
                var d1 = this.value8.getDate();
                var y2 = this.value9.getFullYear();
                var m2 = this.value9.getMonth() + 1;
                var d2 = this.value9.getDate();
                var check_in = y1+'-'+m1+'-'+d1;
                var check_out = y2+'-'+m2+'-'+d2;
                // console.log(check_in,check_out);
                // axios({
                //     url: 'http://localhost:3004/houselist.php',
                //     method: 'post',
                //     data: qs.stringify({check_in: check_in, check_out: check_out}),
                //     headers: {
                //         'Content-Type': 'application/x-www-form-urlencoded'
                //     }
                // }).then(res => {
                //     console.log(res)
                //     // );
                //     // this.dataset = res.data;
                // })
                this.$router.push({name: 'list',query: {check_in: check_in,check_out: check_out}});
            }
        }
    };
</script>