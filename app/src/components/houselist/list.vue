<template>
    <div class="content">
        <div class="bottom" v-if="dataset.length > 0">
            <ul>
                <li v-for="(value, key) in dataset" @click="getContent(value)">
                    <div class="housing">
                        <i class="el-icon-star-on"></i>
                        <img src="../../assets/housing1.jpg">
                        <span class="price">￥{{value.price}}</span>
                        <i class="touxiang"></i>
                    </div>
                    <h3>{{value.room_name}}</h3>
                    <p><span>{{value.type_name}}-</span><span>{{value.bed}}张床-</span><span>可住{{value.max_people}}人</span><span>{{value.room_position}}</span></p>    
                    <div class="star">
                        <ul>
                            <li><i class="el-icon-star-on"></i></li>
                            <li><i class="el-icon-star-on"></i></li>
                            <li><i class="el-icon-star-on"></i></li>
                            <li><i class="el-icon-star-on"></i></li>
                            <li><i class="el-icon-star-on"></i></li>
                        </ul>
                        <p class="pinjia">{{value.pingjia}}人评价</p>
                    </div> 
                </li>
                <!-- <li>
                    <div class="housing">
                        <i class="el-icon-star-on"></i>
                        <img src="../../assets/housing1.jpg">
                        <span class="price">7481</span>
                        <i class="touxiang"></i>
                    </div>
                    <h3>新世界旁30平米大房子舒适温馨</h3>
                    <p>整套-2张床-可住2人北京市</p>    
                    <div class="star">
                        <ul>
                            <li><i class="el-icon-star-on"></i></li>
                            <li><i class="el-icon-star-on"></i></li>
                            <li><i class="el-icon-star-on"></i></li>
                            <li><i class="el-icon-star-on"></i></li>
                            <li><i class="el-icon-star-on"></i></li>
                        </ul>
                        <p class="pinjia">15人评价</p>
                    </div> 
                </li>
                <li>
                    <div class="housing">
                        <i class="el-icon-star-on"></i>
                        <img src="../../assets/housing1.jpg">
                        <span class="price">7481</span>
                        <i class="touxiang"></i>
                    </div>
                    <h3>新世界旁30平米大房子舒适温馨</h3>
                    <p>整套-2张床-可住2人北京市</p>    
                    <div class="star">
                        <ul>
                            <li><i class="el-icon-star-on"></i></li>
                            <li><i class="el-icon-star-on"></i></li>
                            <li><i class="el-icon-star-on"></i></li>
                            <li><i class="el-icon-star-on"></i></li>
                            <li><i class="el-icon-star-on"></i></li>
                        </ul>
                        <p class="pinjia">15人评价</p>
                    </div> 
                </li> -->
                
            </ul>
        </div>
         <p v-else-if="dataset.length < 1" class="alert">{{alert}}</p>
    </div>
</template>

<script>
    import axios from 'axios';
    import qs from 'qs'
    import './houselist.scss';
    export default {
        data: function(){
            return {
                dataset: [],
                obj:{},
                alert:"找不到数据!"
            }
        },
        methods:{
            data:function(){
                console.log(666);
            },
            // 点击当前的li
            getContent(value) {
                // console.log(value.room_id)
                // 传数据id用query
                this.$router.push({path:'/housedetails',query:{id:value.room_id}})
            }
        },
        mounted(){
            var data = {check_in:this.$route.query.object1,check_out:this.$route.query.object2};

            var position= {room_position:this.$route.query.object3};
            var sort = {sort:this.$route.query.object4};
            // console.log(this.aa);
            // if(data != {}){
            //     this.obj = data;
            //     return;
            // } else if(position != {}){
            //     this.obj = position;
            //     return;
            // } else if(sort != {}){
            //     this.obj = sort;
            //     return;
            // }
            
            // if(this.$route.query['room_position']){
            //     this.$emit("tr",this.$route.query['room_position']);
            //     console.log(this.$route.query['room_position'])
            // }

            if(this.dataset.length < 1){
                axios({
                    url: 'http://localhost:3004/houselist.php',
                    method: 'post',
                    data: qs.stringify(this.$route.query),
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                }).then(res => {
                    // console.log(res)
                    this.dataset = res.data;
                });
            }
        }
    }

    
</script>
