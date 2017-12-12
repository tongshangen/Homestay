<template>
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
                    <img src="../../assets/nav_logo.png" alt="">
                </div>
            </div>
            <div class="order_footer"></div>
        </li>
    </ul>
</template>

<script>
    import axios from 'axios'
    import qs from 'qs'
    import $ from 'jquery'

    export default {
        data: function(){
            return {
                myorder:[]
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
                    console.log(res);
                    this.myorder = res.data;                   
                })
            })
        }
    }
</script>

