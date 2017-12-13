<template>
<<<<<<< HEAD
    <div class="Main">
        <h3>测试</h3>
        <button @click="give">提交</button>
    </div>
    
</template>
<script>
    import axios from 'axios'
    import qs from 'qs'
    export default {
        data() {
            return{
                res:''
            }
        },
        methods: {
            give() {
                axios({
                    url: 'http://10.3.135.244:8008/PHP/order_status.php',
                    method: 'post',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                }).then(res=>{
                    console.log(res)
                })
            }
        }
    }
=======
	<div class="Lmain">
		<div class="Lheader">
			<router-link to="/" class="el-icon-back Lleft"></router-link>
			<div class="Llogins">登录</div>
			<router-link to="/register" class="Lregister">注册</router-link>
		</div>
		<div class="Lcenter">
			<div class="Llogo">
				<img src="../../assets/nav_logo.png">
			</div>
			<div class="Luser">
				<label for="Lusername">用户:</label>
				<input type="text" v-model="username" id="Lusername" placeholder="请输入手机号">
			</div>
			<div class="Lpsw">
				<label for="password">密码:</label>
				<input type="text" v-model="password" id="Lpassword" placeholder="请输入密码">
			</div>

			<div class="msg">
				
			</div>

			<div class="Llogin">
				<el-button type="danger" round class="login" @click="login">登录</el-button>
			</div>
		</div>
	</div>
</template>


<script>
	import './login.scss'
	import axios from 'axios';
	import $ from 'jquery';
	import router from '../../router/';

	export default{
		data: function(){
			return{
				username: '',
				password: ''
			}
		},
		methods: {
			login: function(){
				var username = $('#Lusername').val();
				if(!$('#Lusername').val()){
		            $('.msg').show();
	                $('.msg')[0].innerHTML=('请输入手机号');
	                setTimeout(function(){
						$('.msg').hide();
					},3000);
		            $('#Lusername').focus();
		            $('#Lusername').val('');
		            return false;
		        }else if(!/^1[34578]\d{9}$/.test(username)){
		        	$('.msg').show();
	                $('.msg')[0].innerHTML=('请正确输入手机号');
	                setTimeout(function(){
						$('.msg').hide();
					},3000);
	                $('#Lusername').focus();
	                $('#Lusername').val('');
	                return false; 
		        };


		    	var password = $('#Lpassword').val();
	            if(!$('#Lpassword').val()){
		            $('.msg').show();
	                $('.msg')[0].innerHTML=('请输入密码');
	                setTimeout(function(){
						$('.msg').hide();
					},3000);
		            $('#Lpassword').focus();
		            $('#Lpassword').val('');
		            return false;
		        } else if (!/^\S{6,20}$/.test(password)){
					$('.msg').show();
					$('.msg')[0].innerHTML=('密码应为6位数以上');
					setTimeout(function(){
						$('.msg').hide();
					},3000);
					$('#Lpassword').focus();
	                $('#Lpassword').val('');
					return false;
				};
				$.ajax({
					url: 'http://localhost:1133/login.php',
					type: 'get',
					data: {user_tel: this.username, password: this.password},
					success:function(re){
						console.log(re)
						if(re=='true'){
							$('.msg').show();
							$('.msg')[0].innerHTML=('登录成功');
							// sessionStorage.setItem("user_tel","username");
							sessionStorage.setItem("name", username); 
							setTimeout(function(){
								router.push({name: 'main'});
							},1000)
						}else if(re=='false'){
							$('.msg').show();
			                $('.msg')[0].innerHTML=('请输入正确的用户名和密码');
			                setTimeout(function(){
								$('.msg').hide();
							},3000);
							$('#Lusername').focus();
			                $('#Lusername').val('');
			                $('#Lpassword').val('');
						}
					}
				})	
			}
		}
	}
>>>>>>> 78a2fd3e8df69978375b9ff49437999c68691dcf
</script>