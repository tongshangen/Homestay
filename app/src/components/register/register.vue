<template>
	<div class="Rmain">
		<div class="Rheader">
			<div class="el-icon-back Rleft"></div>
			<div class="Rregister">注册</div>
			<el-button type="text" class="Rlogin">登录</el-button>
		</div>
		<div class="Rcenter">
			<div class="Rlogo">
				<img src="../../assets/nav_logo.png">
			</div>
			<div class="Ruser">
				<label for="Rusername">用户:</label>
				<input type="text" name="Rusername" id="username" placeholder="请输入手机号">
			</div>
			<div class="Rpsw">
				<label for="Rpassword">密码:</label>
				<input type="text" name="Rpassword" id="password" placeholder="请输入密码">
			</div>
			<div class="Rregist">
				<el-button type="danger" round class="Rregister">注册</el-button>
			</div>
		</div>
	</div>
</template>


<script>
import './register.scss'
	export default{

	}
</script>