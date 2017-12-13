<template>
	<div class="ddd">
        <div class="top">
            <header>
                <i class="el-icon-back" @click="goBack"></i>
                <h3>房源详情</h3>
                <ul>
                    <!-- <li>收藏</li> -->
                    <li @click="login">登录</li>
                </ul>
                <!-- <div class="banner"> -->
                <!-- </div> -->
            </header>
        </div>
        <div class="ma">
            <div class="bottom">
                <div class="img">
                    <img src="../../assets/housing1.jpg">
                    <span class="price">{{totalMsg.price}}</span>
                    <!-- <p><span class="pageitem">1</span><span class="pages_totle">17</span></p> -->
                </div>
                <div class="house_mass">
                    <h3>{{totalMsg.room_name}}</h3>
                    <i class="touxiang"></i>
                    <span>九鼎</span>
                </div>
                <div class="rent">
                    <h3>整套出租</h3>
                    <ul>
                        <li>1室</li>
                        <li>{{totalMsg.bed}}张床</li>
                        <li>可住{{totalMsg.max_people}}人</li>
                        <li>{{totalMsg.room_size}}平米</li>
                    </ul>
                </div>
                <div class="account">
                    <h3>房源描述</h3>
                    <p>{{totalMsg.about}}</p>
                    <!-- <span>查看全部</span> -->
                </div>
                <div class="appraise">
                    <div class="star">
                        <h3>{{totalMsg.pingjia}}人评价</h3>
                        <ul>
                            <li class="el-icon-star-off"></li>
                            <li class="el-icon-star-off"></li>
                            <li class="el-icon-star-off"></li>
                            <li class="el-icon-star-off"></li>
                            <li class="el-icon-star-off"></li>
                        </ul>
                        <p>5.0</p>
                    </div>
                    <div class="infor">
                        <ul>
                            <li>
                                <div class="top">
                                    <i class="touxiang"></i>
                                    <h3>摩卡</h3>
                                    <p>2017年11月入住</p>
                                </div>
                                <div class="pinglun">这家非常好，非常nice,身在异乡给了我家一样的感觉</div>
                            </li>
                        </ul>
                        <span>全部评价</span>
                    </div>
                    <div class="address">
                        <h3>地址</h3>
                        <p>{{totalMsg.room_position}}</p>
                        <div class="Img">
                            <img src="../../assets/address.png">
                        </div>
                    </div> 
                    <div class="bed">
                        <h3>床铺信息</h3>
                        <ul>
                            <li>一张双人床小</li>
                            <li>一张沙发床</li>                            
                        </ul>
                    </div>
                    <div class="check_in">
                        <h3>入住信息</h3>
                        <ul>
                            <li><span> 房源类型</span><span>{{totalMsg.type_name}}公寓</span></li>
                            <li><span>卫生间(公共/独立)</span><span>{{totalMsg.wc}}/1</span></li>
                            <li><span>入住时间</span><span>{{totalMsg.check_in}}</span></li>
                            <li><span>退房时间</span><span>{{totalMsg.check_out}}</span></li>
                            <li><span>最短入住天数</span><span>10</span></li>
                        </ul>
                    </div> 
                    <div class="facility" v-if="">
                        <h3>配套设施</h3>
                        <ul>
                            <li v-for="(value, key) in device">{{value}}</li>
                            <!-- <li>牙具</li>
                            <li>沐浴露</li>
                            <li>洗发水</li> -->

                        </ul>
                    </div>
                    <div class="similarity">
                        <h3>相似房源</h3>
                        
                        	<!-- <ul>
							<li>
								<div class="img"><img src="../../assets/like1.jpg"></div>
								<div class="mass">
										<div class="like_left">
											<h3>京恋清水</h3>
											<p>整套-7张床-可住7人-京都市</p>
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
									</div>	
								<div class="like_right">
									<i></i>
									<button>接送机</button>
								</div>
								</div>	
							</li>
							<li>
								<div class="img"><img src="../../assets/like1.jpg"></div>
								<div class="mass">
										<div class="like_left">
											<h3>京恋清水</h3>
											<p>整套-7张床-可住7人-京都市</p>
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
									    </div>	
								    <div class="like_right">
									    <i></i>
									    <button>接送机</button>
								    </div>
								</div>	
							</li>
						</ul> -->
                    <!-- 配置slider组件 -->
                    <slider :pages="pages1" :sliderinit="sliderinit1" @slide='slide' @tap='onTap' @init='onInit'>

                    </slider>
                    </div>
                </div>
            </div>
        </div>
		<footer>
            <div class="btn">
                <!-- <button>联系房东</button> -->
                <button @click="toDetails">申请预定</button>
            </div>
        </footer>
	</div>
</template>
<script>
    import '../housedetails/housedetails.scss'
    import axios from 'axios'
    import qs from 'qs'
    import slider from 'vue-concise-slider'
    export default {
        data() {
            return{
                data: [],
                totalMsg: '',
                device:[],
                // slider组件

                pages1: [
                    {
                        html: `<div class="slider1"><div class="img"><img src="../src/assets/like1.jpg"></div>
                                    <div class="mass">
										<div class="like_left">
											<h3>京恋清水</h3>
											<p>整套-7张床-可住7人-京都市</p>
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
									    </div>	
								</div>	
                            </div>`,
                    },
                    {
                        html: `<div class="slider2"><div class="img"><img src="../src/assets/like1.jpg"></div>
                                    <div class="mass">
										<div class="like_left">
											<h3>京恋清水</h3>
											<p>整套-7张床-可住7人-京都市</p>
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
									    </div>	
								</div>	
                            </div>`,
                    },
                    {
                        html: `<div class="slider3"><div class="img"><img src="../src/assets/like1.jpg"></div>
                                    <div class="mass">
										<div class="like_left">
											<h3>京恋清水</h3>
											<p>整套-7张床-可住7人-京都市</p>
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
									    </div>	
								    </div>
                                </div>`,
                    }
                ],
                sliderinit1: {
				    currentPage: 0,
				    thresholdDistance: 500,
				    thresholdTime: 1000,
				    // autoplay:3000,
				    loop:true,
				    direction:'horizontal',
				    infinite:1,
				    slidesToScroll:1,
				    timingFunction: 'ease',
				    duration: 300
				}
            }
        },
        methods:{
            login: function(){
                this.$router.push({name:'login'});
            },
            toDetails() {
                // console.log(this.$router);
                let that = this;
                that.$router.push({path:'/houseorderDetails',query:{id:that.totalMsg.hotel_id}})
            },
            // go() {
                
            // },
            goBack() {
                let that = this;
                that.$router.push({path: '/houselist/list'})
            },
            slide (data) {

            },
            onTap (data) {

            },  
            onInit (data) {

            }
        },
        created() {
            var str = location.href;
            var idx = str.indexOf('=');
            // 拿到房屋id
            var currentId=str.substr(idx+1);
            console.log(currentId);

            axios({
                url: 'http://localhost:3004/houselist.php',
                method: 'post',
                data: qs.stringify(this.$router.query),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            }).then(res =>{
                // console.log(res.data);
                for(var i=0;i<res.data.length;i++){
                    if(res.data[i].room_id===currentId){
                        var currentValue = res.data[i];
                    }
                }
                // console.log(currentValue);
                // console.log(currentValue.device.split(',').length);
                this.device = currentValue.device.split(',');
                this.totalMsg = currentValue;
                console.log(this.totalMsg)
                console.log(this.device)    
            });
        },
        components: {
            slider
        }
    }
</script>