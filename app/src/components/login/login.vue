<template>
	<div class="Lmain">
		<div class="Lheader">
			<div class="el-icon-back Lleft"></div>
			<div class="Llogin">登录</div>
			<el-button type="text" class="Lregister">注册</el-button>
		</div>
		<div class="Lcenter">
			<div class="Llogo">
				<img src="../../assets/nav_logo.png">
			</div>
			<div class="Luser">
				<label for="Lusername">用户:</label>
				<input type="text" name="username" id="username" placeholder="请输入手机号">
			</div>
			<div class="Lpsw">
				<label for="password">密码:</label>
				<input type="text" name="password" id="password" placeholder="请输入密码">
			</div>
			<div class="Lregist">
				<el-button type="danger" round class="Lregister">登录</el-button>
			</div>
		</div>
	</div>
</template>


<script>
	import './login.scss'
	export default{

	}
</script>