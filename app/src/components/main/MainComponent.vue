<template>
	<div class="Main">		
		<div class="main">
			<header>
				<div class="banner">
					<img src="../../assets/banner1.jpg">
				</div>
				<div class="sherch">
					<i class="el-icon-search"></i>
					<input type="text" id="sherch" placeholder="搜索想去的目的地、景点" @click="sherch">
				</div>
			</header>
			<div class="hot_city">
				<h2>- 热门城市 -</h2>
				<ul>
					<li id="city"><router-link to="/houselist/list">
						<img src="../../assets/hot_city1.png">
						<p>丽江</p>
						</router-link>
					</li>
					<li>
						<img src="../../assets/hot_city2.png">
						<p>云南大理</p>
					</li>
					<li>
						<img src="../../assets/hot_city3.png">
						<p>三亚</p>
					</li>
					<li>
						<img src="../../assets/hot_city4.png">
						<p>香港</p>
					</li>
				</ul>
			</div>
			<div class="like">
				<h2>- 你可能会喜欢 -</h2>
				<ul>
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
				</ul>
			</div>
			<div class="hot_city">
				<h2>- 玩遍中国 -</h2>
				<ul>
					<li>
						<img src="../../assets/hot_city5.png">
						<p>北京</p>
					</li>
					<li>
						<img src="../../assets/hot_city6.png">
						<p>上海</p>
					</li>
					<li>
						<img src="../../assets/hot_city7.png">
						<p>广州</p>
					</li>
					<li>
						<img src="../../assets/hot_city8.png">
						<p>三亚</p>
					</li>
				</ul>
			</div>
			<div class="fangdong">
				<h2>- 房东故事 -</h2>
				<ul>
					<li>
							<img src="../../assets/fangdong1.jpg">
							<div class="liuyan">他放弃亲手创办的公司跑到深山里花15个月爆改百年老墅,改变了一座山的命运</div>
					</li>
					<li>
							<img src="../../assets/fangdong1.jpg">
							<div class="liuyan">他放弃亲手创办的公司跑到深山里花15个月爆改百年老墅,改变了一座山的命运</div>
					</li>
				</ul>
			</div>
		</div>
		<footer>
			<ul>
				<li><i class="el-icon-menu"></i>首页</li>
				<li><i class="el-icon-star-on"></i>收藏</li>
				<li><i class="el-icon-tickets"></i>订单</li>
				<li><i class="el-icon-goods"></i>我的</li>
			</ul>
		</footer>
	</div>
</template>

<script type="text/javascript">
	import './MainComponent.scss'
	import  axios from 'axios';
	import qs from 'qs'


	export default {
		methods:{
			sherch:function(){
				// console.log(666);
				this.$router.push({name: 'destination'});
			}
		},

		mounted: function () {
		  var value = sessionStorage.getItem("name");
		  console.log(value)
		}
	}

</script>