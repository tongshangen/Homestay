<template>
    <ul>
        <li v-for="(value,key) in myhouse" @click="edit($event,key)">
            <div class="order_header">
                <h3>{{value.room_name}}</h3>
            </div>
            <div class="order_main">
                <div class="order_main_l">
                    <p>{{value.room_position}}</p>
                    <p>{{value.room_type}}<span><i>￥</i>{{value.price}}</span></p>
                </div>
                <div class="order_main_r"> 
                    <!-- {{value.img_url.slice(2,-2)}} -->
                    <!-- ../../assets/housing1.jpg -->
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
    import $ from 'jquery'

    export default {
        data: function(){
            return {
                myhouse:[]
            }
        },
        methods:{
            edit: function(_event,index){
                this.$store.state.housedes.title = $('.order_header h3')[index].innerText;       
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
                     axios({
                        url: 'http://localhost:1133/room_render.php',
                        method: 'post',
                        data: qs.stringify({
                            user_id:res.data[0].user_id,
                            room_name:this.$store.state.housedes.title
                        }),
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded;'
                        }
                    }).then(res => {
                        this.$store.state.housedes.title = res.data[0].room_name;this.$store.state.houselocation.city = res.data[0].room_position;this.$store.state.houselocation.near = res.data[0].nearby;this.$store.state.houseinfo.area = res.data[0].room_size;this.$store.state.addnewhouse.spacetype = res.data[0].room_type;this.$store.state.houseinfo.peoplenum = res.data[0].max_people;this.$store.state.houseprice.price =  res.data[0].price;
                        this.$store.state.housefacility.desdata = res.data[0].device;
                        this.$store.state.houseinfo.bednum = res.data[0].bed;
                        this.$store.state.houseinfo.wcnum =  res.data[0].wc;
                        localStorage.setItem('title',res.data[0].room_name); 
                        localStorage.setItem('city',res.data[0].room_position);
                        localStorage.setItem('nearby',res.data[0].nearby);
                        localStorage.setItem('area',res.data[0].room_size);
                        localStorage.setItem('spacetype',res.data[0].room_type);
                        localStorage.setItem('peoplenum',res.data[0].max_people);
                        localStorage.setItem('price',res.data[0].price);
                        localStorage.setItem('dev',res.data[0].device);
                        localStorage.setItem('bed',res.data[0].bed);
                        localStorage.setItem('wc',res.data[0].wc);
                    })
                })
               
                this.$router.push({name:"edithouse"});
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
                    url: 'http://localhost:1133/room_wy_select.php',
                    method: 'post',
                    data: qs.stringify({
                        user_id:user_id
                    }),
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;'
                    }
                }).then(res => {
                    this.myhouse = res.data;                   
                })
            })
            
        }
    }
</script>

