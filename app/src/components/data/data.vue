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
                console.log('666')
            }
        }
    };
</script>