<template>
	<div class="Rmain">
		<div class="Rheader">
			<router-link to="/" class="el-icon-back Rleft"></router-link>
			<div class="Rregister">注册</div>
			<router-link to="/login" class="Rlogin">登录</router-link>
		</div>
		<div class="Rcenter">
			<div class="Rlogo">
				<img src="../../assets/nav_logo.png">
			</div>
			<div class="Ruser">
				<label for="Rusername">用户:</label>
				<input type="text" v-model="username" id="username" placeholder="请输入手机号" @blur="name">
				<i class="el-icon-check check1"></i>
			</div>
			<div class="Rnick">
				<label for="Rnickname">昵称:</label>
				<input type="text" v-model="nickname"id="nickname" placeholder="请输入昵称" @blur="nick">
				<i class="el-icon-check check2"></i>
			</div>
			<div class="Rpsw">
				<label for="Rpassword">密码:</label>
				<input type="password" v-model="password" id="password" placeholder="请输入密码" @blur="psw">
				<i class="el-icon-check check3"></i>
			</div>
			<div class="Repsw">
				<label for="Rpassword">确认密码:</label>
				<input type="password" id="passwords" placeholder="请确认密码" @blur="psws">
				<i class="el-icon-check check4"></i>
			</div>
			<div class="msg">
				
			</div>
			<div class="Rregist">
				<el-button type="danger" round class="register" @click="register">注册</el-button>
			</div>
		</div>
	</div>
</template>


<script>
	import './register.scss';
	import axios from 'axios';
	import qs from 'qs';
	import $ from 'jquery';
	import router from '../../router/';

	export default{
		data: function(){
			return{
				username: '',
				nickname: '',
				password: ''
			}
		},
		methods: {
			//用户
			name: function(){
				var username = $('#username').val();
				if(!$('#username').val()){
		            $('.msg').show();
	                $('.msg')[0].innerHTML=('请输入手机号');
	                setTimeout(function(){
						$('.msg').hide();
					},3000);
		            $('#username').focus();
		            $('#username').val('');
		            return false;
		        }else if(!/^1[34578]\d{9}$/.test(username)){
		        	$('.msg').show();
	                $('.msg')[0].innerHTML=('请正确输入手机号');
	                setTimeout(function(){
						$('.msg').hide();
					},3000);
	                $('#username').focus();
	                $('#username').val('');
	                return false; 
		        } else {

		        	$.ajax({
						url: 'http://localhost:3004/reg.php',
						type: 'get',
						data: {user_tel: this.username},
						success:function(res){
							// res=JSON.parse(res);
							console.log(res);
							if(res == 'false'){
								$('.msg').show();
				                $('.msg')[0].innerHTML=('此号码已存在');
				                setTimeout(function(){
									$('.msg').hide();
								},3000);
				                $('#username').focus();
				                $('#username').val('');
				                return false; 
							} else if(res == 'true'){
								$('.check1').show();	
							}
						}
					})	
		        	
		        }
		    },
		    //昵称
		    nick: function(){
		    	var nickname = $('#nickname').val();
		        if(!$('#nickname').val()){
		            $('.msg').show();
	                $('.msg')[0].innerHTML=('请输入昵称');
	                setTimeout(function(){
						$('.msg').hide();
					},3000);
		            $('#nickname').focus();
		            $('#nickname').val('');
		            return false;
		        } else {
		        	$('.check2').show();
		        }
		    },
		    //密码
		    psw: function(){
		    	var password = $('#password').val();
	            if(!$('#password').val()){
		            $('.msg').show();
	                $('.msg')[0].innerHTML=('请输入密码');
	                setTimeout(function(){
						$('.msg').hide();
					},3000);
		            $('#password').focus();
		            $('#password').val('');
		            return false;
		        } else if (!/^\S{6,20}$/.test(password)){
					$('.msg').show();
					$('.msg')[0].innerHTML=('密码应为6位数以上');
					setTimeout(function(){
						$('.msg').hide();
					},3000);
					$('#password').focus();
	                $('#password').val('');
					return false;
				} else {
		        	$('.check3').show();
		        }
		    },
		    //确认密码
		    psws: function(){
		    	var _password = $('#passwords').val();
				if(!$('#passwords').val()){
		            $('.msg').show();
	                $('.msg')[0].innerHTML=('请确认密码');
	                setTimeout(function(){
						$('.msg').hide();
					},3000);
		            $('#passwords').focus();
		            $('#passwords').val('');
		            return false;
		        } else if( _password !== $('#password').val()) {
		        	$('.msg').show();
	                $('.msg')[0].innerHTML=('两次密码不一致');
	                setTimeout(function(){
						$('.msg').hide();
					},3000);
					$('#passwords').focus();
		            $('#passwords').val('');
		        } else {
		        	$('.check4').show();
		        }
		    },
		    //注册
			register: function(){	
				if(!$('#username').val()){
		            $('.msg').show();
	                $('.msg')[0].innerHTML=('请输入手机号');
	                setTimeout(function(){
						$('.msg').hide();
					},3000);
		            $('#username').focus();
		            $('#username').val('');
		            return false;
		        };
				$.ajax({
					url: 'http://localhost:3004/reg.php',
					type: 'get',
					data: {user_tel: this.username, password: this.password, nickname: this.nickname},
					success:function(re){
						console.log(re)
						if(re=='ok'){
							$('.msg').show();
			                $('.msg')[0].innerHTML=('注册成功,请登录');
			                setTimeout(function(){
			                	router.push({name: 'login'});
								$('.msg').hide();
							},1000);
						}else if(re=='no'){
							$('.msg').show();
			                $('.msg')[0].innerHTML=('注册失败');
			                setTimeout(function(){
								$('.msg').hide();
							},3000);
						}
					}
				})	
			}
		}
	}
</script>