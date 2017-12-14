<template>
	<div class="Main">		
		<div class="main">
			<div class="sherch">
				<i class="el-icon-search"></i>
				<input type="text" id="sherch" placeholder="搜索想去的目的地、景点" @click="sherch">
			</div>
			<header>
				<div class="banner">
					<!-- <img src="../../assets/banner1.jpg"> -->
				<!-- </div> -->
				<!-- <div style="width:100%;height:400px"> -->
					<!-- 配置slider组件 -->
					<slider :pages="pages" :sliderinit="sliderinit" @slide='slide' @tap='onTap' @init='onInit'>
						<!-- 设置loading,可自定义 -->
						<!-- <div slot="loading">loading...</div> -->

					</slider>
				</div>
			</header>
			<div class="hot_city">
				<h2>- 热门城市 -</h2>
				<ul>
					<li @click="links">
						<img src="../../assets/hot_city1.png">
						<p>广州</p>
					</li>
					<li @click="links">
						<img src="../../assets/hot_city2.png">
						<p>北京</p>
					</li>
					<li @click="links">
						<img src="../../assets/hot_city3.png">
						<p>海南省</p>
					</li>
					<li @click="links">
						<img src="../../assets/hot_city4.png">
						<p>上海</p>
					</li>
				</ul>
			</div>
			<div class="like">
				<h2>- 你可能会喜欢 -</h2>
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
					<!-- 设置loading,可自定义 -->
					<!-- <div slot="loading">loading...</div> -->

				</slider>
			</div>
			<div class="hot_city">
				<h2>- 玩遍中国 -</h2>
				<ul>
					<li @click="links">
						<img src="../../assets/hot_city5.png">
						<p>台湾</p>
					</li>
					<li @click="links">
						<img src="../../assets/hot_city6.png">
						<p>香港</p>
					</li>
					<li @click="links">
						<img src="../../assets/hot_city7.png">
						<p>云南</p>
					</li>
					<li @click="links">
						<img src="../../assets/hot_city8.png">
						<p>天津</p>
					</li>
				</ul>
			</div>
			<div class="fangdong">
				<h2>- 房东故事 -</h2>
				<slider :pages="pages2" :sliderinit="sliderinit2" @slide='slide' @tap='onTap' @init='onInit' class="fd">
					<!-- 设置loading,可自定义 -->
					<!-- <div slot="loading">loading...</div> -->

				</slider>
				<!-- <ul>
					<li>
						<img src="../../assets/fangdong1.jpg">
						<div class="liuyan">他放弃亲手创办的公司跑到深山里花15个月爆改百年老墅,改变了一座山的命运</div>
					</li>
					<li>
						<img src="../../assets/fangdong1.jpg">
						<div class="liuyan">他放弃亲手创办的公司跑到深山里花15个月爆改百年老墅,改变了一座山的命运</div>
					</li>
				</ul> -->
			</div>
		</div>
		<footer>
			<ul>
				<li @click="index"><i class="el-icon-menu"></i>首页</li>
				<li><i class="el-icon-star-on"></i>收藏</li>
				<li @click="order"><i class="el-icon-tickets"></i>订单</li>
				<li @click="my"><i class="el-icon-goods"></i>我的</li>
			</ul>
		</footer>
	</div>
</template>

<script type="text/javascript">
	import './MainComponent.scss'
	import  axios from 'axios';
	import qs from 'qs'
	import slider from 'vue-concise-slider'
	import $ from 'jquery'

	export default {
		 data () {
			return {
				//Image list
				pages:[
				{
				html: '<div><img src="../src/assets/banner1.jpg"/></div>',
				},
				{
					html: '<div><img src="../src/assets/banner2.jpg"/></div>',
				},
				{
					html: '<div><img src="../src/assets/banner3.jpg"/></div>',
				}
				],
				//Sliding configuration [obj]
				sliderinit: {
				currentPage: 0,
				thresholdDistance: 500,
				thresholdTime: 1000,
				autoplay:3000,
				loop:true,
				direction:'horizontal',
				infinite:1,
				slidesToScroll:1,
				timingFunction: 'ease',
				duration: 300
				},
				pages1:[
				{
				html: `<div><div class="img"><img src="../src/assets/like1.jpg"></div>
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
						</div>
						</div>
					</div>`,
				},
				{
					html: `<div><div class="img"><img src="../src/assets/like1.jpg"></div>
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
						</div>
						</div>
					</div>`,
				},
				{
					html: `<div><div class="img"><img src="../src/assets/like1.jpg"></div>
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
						</div>
						</div>
					</div>`,
				}
				],
				//Sliding configuration [obj]
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
				},
				pages2:[
				{
				html: `<img src="../src/assets/fangdong3.jpg">
						<div class="liuyan">2个月爆改1949年的老房子，陈坤徐若瑄都成这儿的常客</div>`,
				},
				{
					html: `<img src="../src/assets/fangdong2.jpg">
						<div class="liuyan">20岁开上宾利，90后农村女孩逆袭成为最美民宿老板</div>`,
				},
				{
					html: `<img src="../src/assets/fangdong1.jpg">
						<div class="liuyan">他放弃亲手创办的公司跑到深山里花15个月爆改百年老墅,改变了一座山的命运</div>`,
				}
				],
				//Sliding configuration [obj]
				sliderinit2: {
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
				},
				dataset:[],
				aa:{}
			}
		},
		components: {
			slider
		},
		methods:{
			index:function(){
				this.$router.push({name:'main'});
			},
			my: function(){
				this.$router.push({name:'user'});
			},
			order: function(){
				// this.$router.push({name:'main_wy'});
			},
			sherch:function(){
				// console.log(666);
				this.$router.push({name: 'destination'});
			},
			links:function(eve){
				var el = eve.currentTarget.getElementsByTagName('p')[0].innerText
				// console.log(el)
				this.$router.push({name: 'list',query: {room_position: el}});
			},
			slide (data) {
				// console.log(data)
			},
			onTap (data) {
				// console.log(data)
			},
			onInit (data) {
				// console.log(data)
			}
		},

		mounted: function () {
			$('.main')[0].onscroll=function(){
				if($(this).scrollTop()>500){
					// console.log(66)
					$('.sherch').css({
						top: '-30px',
						background: '#fff',
						opacity: '1'
					})
				}else if($(this).scrollTop()<=500){
					$('.sherch').css({
						top: '0px',
						background: '',
						opacity: '0.6'
					})
				}
			},
			this.reversedMessage
		},
		computed: {
			reversedMessage: {
				get: function(){
					// var aa ={};
					axios({
						url: 'http://localhost:3004/remRandom.php',
						method: 'post',
						data: qs.stringify(this.$route.query),
						headers: {
							'Content-Type': 'application/x-www-form-urlencoded'
						}
					}).then(res => {
						// console.log(res)
						this.dataset = res.data;
						for(var i=0;i<this.dataset.length;i++){
							var img = JSON.parse(this.dataset[i].img_url);
							console.log(img)
// 							this.aa.html=`<div><div class="img"><img src="${img[0]
// }"></div>
// 								<div class="mass">
// 										<div class="like_left">
// 											<h3>京恋清水</h3>
// 											<p>${this.dataset[i].type_name}-${this.dataset[i].bedroom
// }张床-可住7人-京都市</p>
// 											<div class="star">
// 												<ul>
// 													<li><i class="el-icon-star-on"></i></li>
// 													<li><i class="el-icon-star-on"></i></li>
// 													<li><i class="el-icon-star-on"></i></li>
// 													<li><i class="el-icon-star-on"></i></li>
// 													<li><i class="el-icon-star-on"></i></li>
// 												</ul>
// 												<p class="pinjia">15人评价</p>
// 											</div>
// 									</div>	
// 								<div class="like_right">
// 									<i></i>
// 								</div>
// 								</div>
// 							</div>`
						// console.log(this.aa);
						
						}
						// this.pages1.push(this.aa);
					});
					
				}
				
			}
		}
	}

</script>