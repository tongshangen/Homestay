<template>
    <div>
        <ul>
            <li v-for="(value,key) in myorder">
                <div class="order_header">
                    <h3>{{value.nickname}}</h3>
                </div>
                <div class="order_main">
                    <div class="order_main_l">
                        <p>{{value.stay_time}}到{{value.leave_time}}</p>
                        <p>总价：<span><i>￥</i>{{value.total}}</span></p>
                    </div>
                    <div class="order_main_r">
                        <!-- <img src="../../assets/nav_logo.png" alt=""> -->
                        <input type="button" v-model="value.status" @click="confirm($event,key)"/>
                    </div>
                </div>
                <div class="order_footer"></div>
            </li>
        </ul>
    </div>  
</template>

<script>
    import axios from 'axios'
    import qs from 'qs'
    import $ from 'jquery'
    import './myorder.scss'

    export default {
        data: function(){
            return {
                myorder:[],
                status:{
                    1:'待确定',
                    2:'已确定'
                }
            }
        },
        methods: {
            confirm: function(event,index){
                var nickname = $('li')[index].children[0].children[0].innerText;
                if(event.target.value == '已确定'){
                    alert('已确定订单');
                }else if(event.target.value == '待确定'){
                    event.target.value = '已确定';
                    var status = 2;
                    axios({
                        url: 'http://localhost:1133/update_order_wy.php',
                        method: 'post',
                        data: qs.stringify({
                            status:status,
                            nickname:nickname
                        }),
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded;'
                        }
                    }).then(res => {
                        if(res == 'ok'){
                            alert('确定订单成功！');
                        }else if(res == 'fail'){
                            alert('确定订单失败！');
                        }
                    })
                }
            }
        },
        mounted: function(){     
            var s = sessionStorage.getItem("name");
            axios({
                url: 'http://localhost:1133/sel_user_id.php',
                method: 'post',
                data: qs.stringify({
                    user_tel:s
                }),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;'
                }
            }).then(res => {
                var user_id = res.data[0].user_id;
                axios({
                    url: 'http://localhost:1133/order_wy_sel.php',
                    method: 'post',
                    data: qs.stringify({
                        user_id:user_id
                    }),
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;'
                    }
                }).then(res => {
                    this.myorder = res.data;
                    for(let item of res.data){
                        item.status = this.status[item.status];
                    }            
                })
            })
           
        }
    }
</script>

