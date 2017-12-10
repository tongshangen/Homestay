<template>
    <ul>
        <li v-for="(value,key) in myhouse">
            <div class="order_header">
                <h3>{{value.room_name}}</h3>
            </div>
            <div class="order_main">
                <div class="order_main_l">
                    <p>{{value.room_position}}</p>
                    <p>{{value.room_type}}<span><i>￥</i>{{value.price}}</span></p>
                </div>
                <div class="order_main_r">
                    <img src="" alt="">
                </div>
            </div>
            <div class="order_footer"></div>
        </li>
    </ul>
</template>

<script>
    import './myhouse.scss'

    import axios from 'axios'
    import qs from 'qs'

    export default {
        data: function(){
            return {
                myhouse:[]
            }
        },
        mounted: function(){
            axios({
                    url: 'http://localhost:1133/room_wy_select.php',
                    method: 'post',
                    data: qs.stringify({
                        
                    }),
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;'
                    }
                }).then(res => {
                    this.myhouse = res.data;
                    console.log(this.myhouse);
                })
        }
    }
</script>

