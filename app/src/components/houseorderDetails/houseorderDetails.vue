<template>
    <div class="Main">
        <div class="top">
            <header>
                <i class="el-icon-back" @click="goBack"></i>
                <h3>订单详情</h3>
            </header>
        </div>
        <div class="main">
            <div class="bottom">
                <div class="details_msg">
                    <ul>
                        <li>
                            <img src="../../assets/housing1.jpg" width="288px" height="192px">
                            <!-- <img :src="nowTime[6]" width="288px" height="192px"> -->
                            <h4>{{message.room_name}}</h4>
                            <p>{{message.type_name}}</p>
                            <p>{{message.room_position}}</p>
                            ￥<em>{{message.price}}</em>
                        </li>
                        <li>
                            <span>房&nbsp;&nbsp;&nbsp;&nbsp;东:</span>
                            <h2>{{hotelMsg.hotel_name}}</h2>
                            
                        </li>
                        <li>
                            <span>联系电话:</span>
                            <h2>{{hotelMsg.hotel_tel}}</h2>
                        </li>
                        <li>
                            <span>关于房东:</span>
                            <h2>{{hotelMsg.hotel_about}}</h2>
                        </li>
                    </ul>
                </div>
                <div class="number">
                    <p>入住人数:</p>
                    <el-input-number class="number_people" v-model="num1" @change="handleChange" :min="1" :max="10" label="房客人数"></el-input-number>
                </div>
                <div class="kong"></div>
                <div class="in_time">
                    <div class="block">
                        <!-- <span class="demonstration">时间选择</span> -->
                        <el-date-picker
                            v-model="value6"
                            type="daterange"
                            range-separator="至"
                            start-placeholder="入住时间"
                            end-placeholder="退房时间" @change="timeChange">
                        </el-date-picker>
                    </div>
                </div>
                <div class="kong"></div>  
                <div class="information">
                    <h3>预定者信息</h3>
                    <div class="tel">
                        <label>联系电话:</label>
                        <input type="text" placeholder="请输入手机号码" name="user_tel" class="telphone" v-model="user_tel" @blur="gotel">
                    </div>
                    <div class="namer">
                        <label>姓名:</label>
                        <input type="text" placeholder="请输入姓名" name="user_name" class="proposer" v-model="user_name" @blur="goname">                        
                    </div>
                    <div class="remark">
                        <label>备注:</label>
                        <input type="text" name="user_remark" class="user_remark" v-model="user_remark" @blur="goremark">        
                    </div>
                    
                </div>
                <div class="kong"></div>  
                            
                <div class="total_price">
                    <div class="price_top">
                        <div class="pt_left">
                            <h3>总价(CNY)</h3>
                        </div>
                        <div class="pt_right">
                            <!-- <i>￥</i> -->
                            <p v-show="timeshow">{{message.price}}*{{nowTime[2]}}=￥{{nowTime[5]}}</p>
                            <!-- <p>=￥{{message.price*nowTime[2]}}</p> -->
                        </div>
                    </div>
                    <div class="price_bottom">
                        <ul>
                            <li v-show="timeshow">
                                <p>入住时间:</p>
                                <span>{{nowTime[0]}}</span>
                            </li>
                            <li v-show="timeshow">
                                <p>退房时间:</p>
                                <span>{{nowTime[1]}}</span>
                            </li>
                            <li v-show="timeshow">
                                <p>共:<span>{{nowTime[2]}}</span>晚</p>
                            </li>
                            <li>
                                <p>入住人数:</p>
                                <span>{{num1}}</span>
                            </li>
                            <li>
                                <p>在线押金:</p>
                                <span style="float:right; color:red">不收取</span>
                            </li>
                            <li style="background:#F9F7F7; color:#828488" v-show="timeshow">
                                <p>订单号:</p>
                                <span style="float:right">{{nowTime[4]}}</span>
                            </li>
                            <li style="background:#F9F7F7; color:#828488" v-show="timeshow">
                                <p>下单时间:</p>
                                <span style="float:right">{{nowTime[3]}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="btn">
                <button @click="offDetails">取消订单</button>
                <button @click="toDataBase">提交订单</button>
            </div>
        </footer>
    </div>
</template>
<script>
    import axios from 'axios'
    import qs from 'qs'
    import './houseorderDetails.scss'
    export default {
        data() {
            return{
                // order_id:'',
                currentId:'',
                // 入住人数
                num1: 1,
                timeshow:false,
                input10:'',
                // 用户电话
                user_tel: '',
                // 用户姓名
                user_name: '',
                // 用户备注
                user_remark:'',
                // 入住时间和离开时间
                nowTime:{},
                message:'',
                // 商家信息
                hotelMsg:'',
                // 存入数据库的所有信息(dbMsg)
                dbMsg:{},
                pickerOptions2: {
                    shortcuts: [{
                        text: '最近一周',
                        onClick(picker) {
                            const end = new Date();
                            const start = new Date();
                            start.setTime(start.getTime() - 3600* 1000* 24*7);
                            picker.$emit('pick',[start, end]);
                        }
                    },{
                        text: '最近一个月',
                        onClick(picker) {
                            const end = new Date();
                            const start = new Date();
                            start.setTime(start.getTime() - 3600* 1000* 24*30);
                            picker.$emit('pick',[start, end]);
                        }
                    },{
                        text: '最近三个月',
                        onClick(picker) {
                            const end = new Date();
                            const start = new Date();
                            start.setTime(start.getTime() - 3600* 1000* 24*90);
                            picker.$emit('pick',[start, end]);
                        }
                    }]
                },
                value6: {}
            }
        },
        methods: {
            handleChange(value) {
                console.log(value)
                // console.log(this)
            },
            // 时间的值value6
            timeChange() {
                let that = this;
                // console.log(that.value6)
                // 时间处理有坑，比正常时间少一天，时区问题
                let startTime = that.value6[0].toISOString().slice(0,10);
                // 入住时间
                let trstartTime = new Date(startTime).getTime()+86400000;
                let firsttime = new Date(trstartTime).toISOString().slice(0,10);
                let endTime = that.value6[1].toISOString().slice(0,10);
                // 退房时间
                let time = new Date(endTime).getTime()+86400000;
                let lasttime = new Date(time).toISOString().slice(0,10);
                // 住宿时间
                let timeLong = time - trstartTime;
                let dayLong = timeLong/ 1000 / 60 / 60 /24;
                // 下单时间
                var date = new Date();
                var Y = date.getFullYear() + '-';
                var M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
                var D = date.getDate() + ' ';
                var h = date.getHours() + ':';
                var m = date.getMinutes() + ':';
                var s = date.getSeconds(); 
                var formTime = Y+M+D+h+m+s;
                // console.log(formTime);
                // 订单号
                var formId = date.getTime();
                // 总价
                var total_price = this.message.price*dayLong;
                // console.log(this.message.price,dayLong)
                this.timeshow = true;

                this.nowTime[0] = firsttime;
                this.nowTime[1] = lasttime;
                this.nowTime[2] = dayLong;
                this.nowTime[3] = formTime;
                this.nowTime[4] = formId;               
                this.nowTime[5] = total_price;               
                console.log(this.nowTime)
            },
            // 取消预定
            offDetails() {
                let that = this;
                that.$router.push({path:'/'})
            },
            gotel() {
                let that = this;
                let telValue = that.user_tel;
                if(!(/^1(3|4|5|7|8)\d{9}$/.test(telValue))){
                    confirm('手机号输入有误!')
                    that.user_tel='';
                    return ;
                }
                // else{
                //     axios({
                //         url: '',
                //         method: 'post',
                //         data: qs.stringify({tel: telValue}),
                //         headers: {
                //             'Content-Type': 'application/x-www-form-urlencoded'
                //         }
                //     })
                // }
            },
            goname() {
                let that = this;
                let nameValue = that.user_name;
                if(nameValue===''){
                    confirm('姓名不能为空!')
                    return;
                }
                // else{
                //     axios({
                //         url: '',
                //         method: 'post',
                //         data:qs.stringify({name:nameValue}),
                //         headers: {
                //             'Content-Type': 'application/x-www-form-urlencoded' 
                //         }
                //     })
                //     // that.user_name='';
                // }
            },
            goBack() {
                this.$router.push({path:'/housedetails'});
            },
            goremark() {
                let remarkValue = this.user_remark;
                console.log(remarkValue)
            },
            // 点击存入数据库
            toDataBase() {
                axios({
                    url: 'http://localhost:3004/submit_order.php',
                    method: 'post',
                    data: qs.stringify({
                        order_id: this.nowTime[4],
                        nickname:(this.user_name).toString(),
                        user_tel:this.user_tel,
                        room_id:this.nowTime[4],
                        people:this.num1,
                        stay_time:this.nowTime[0],
                        leave_time:this.nowTime[1],
                        img_url:this.nowTime[6],
                        remark:this.user_remark,
                        total:this.nowTime[5]
                    }),
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                }).then(res =>{
                    console.log(res)
                    console.log(this.nowTime[4])
                    console.log(this.user_name)
                    console.log(this.user_tel)
                    console.log(this.nowTime[4])
                    console.log(this.num1)
                    console.log(this.nowTime[0])
                    console.log(this.nowTime[1])
                    console.log(this.nowTime[6])
                    console.log(this.user_remark)
                    console.log(this.nowTime[5])
                    
                    alert('提交订单成功！');
                    this.$router.push({path:'/'});

                })
            }
        },
        created() {
            var str = location.href;
                
            var idx = str.indexOf('=');
            // 拿到商家id
            var currentId = str.substr(idx+1);
            console.log(currentId);
            axios({
                url: 'http://localhost:3004/houselist.php',
                method: 'post',
                data: qs.stringify(this.$router.query),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            }).then(res =>{
                for(var i=0;i<res.data.length;i++){
                    if(res.data[i].hotel_id===currentId){
                        var currentValue = res.data[i]
                    }
                }
                this.message = currentValue;
                var imgSrc = JSON.parse(currentValue.img_url)[0];
                this.nowTime[6] = imgSrc;
                console.log(imgSrc)
            });
        },
        mounted() {
            var str = location.href;
            var idx = str.indexOf('=');
            var curId = str.substr(idx+1);
            if(curId > 9){
                curId  = '00'+curId;
            }else{
                curId = '000'+curId;
            }

            axios({
                url: 'http://localhost:3004/get_hotel.php',
                method: 'post',
                data: qs.stringify(this.$router.query),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            }).then(res =>{
                for(var i=0;i<res.data.length;i++){
                    // 得到的id是000+id
                    if(res.data[i].hotel_id===curId){
                        var hotelValue = res.data[i]
                    }
                }
                this.hotelMsg = hotelValue;
                console.log(hotelValue)
            })
        }
    }

</script>