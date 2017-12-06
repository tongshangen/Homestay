<template>
	<div class="Main">
		<el-container>
		  <el-aside width="200px">
		  	<div class="logo">后台管理系统</div>
			<el-menu default-active="2" class="el-menu-vertical-demo" @open="handleOpen" @close="handleClose" background-color="#545c64" text-color="#fff" active-text-color="#ffd04b">
		      <el-submenu index="1">
		        <template slot="title">
		          <i class="el-icon-location"></i>
		          <span>导航一</span>
		        </template>
		        <el-menu-item-group>
		          <template slot="title"></template>
		          <el-menu-item index="1-1" @click="$router.push({path:'/product'})">选项1</el-menu-item>
		          <el-menu-item index="1-2" @click="$router.push({path:'/good'})">选项2</el-menu-item>
		        </el-menu-item-group>
		      </el-submenu>
		      
			  <el-submenu index="2">
		        <template slot="title">
		          <i class="el-icon-location"></i>
		          <span>导航一</span>
		        </template>
		        <el-menu-item-group>
		          <template slot="title"></template>
		          <el-menu-item index="2-1">选项1</el-menu-item>
		          <el-menu-item index="2-2">选项2</el-menu-item>
		        </el-menu-item-group>
		      </el-submenu>

		      <el-submenu index="3">
		        <template slot="title">
		          <i class="el-icon-location"></i>
		          <span>导航一</span>
		        </template>
		        <el-menu-item-group>
		          <template slot="title"></template>
		          <el-menu-item index="3-1">选项1</el-menu-item>
		          <el-menu-item index="3-2">选项2</el-menu-item>
		        </el-menu-item-group>
		      </el-submenu>

		      <el-submenu index="4">
		        <template slot="title">
		          <i class="el-icon-location"></i>
		          <span>导航一</span>
		        </template>
		        <el-menu-item-group>
		          <template slot="title"></template>
		          <el-menu-item index="4-1">选项1</el-menu-item>
		          <el-menu-item index="4-2">选项2</el-menu-item>
		        </el-menu-item-group>
		      </el-submenu>

		      <el-submenu index="5">
		        <template slot="title">
		          <i class="el-icon-location"></i>
		          <span>导航一</span>
		        </template>
		        <el-menu-item-group>
		          <template slot="title"></template>
		          <el-menu-item index="5-1">选项1</el-menu-item>
		          <el-menu-item index="5-2">选项2</el-menu-item>
		        </el-menu-item-group>
		      </el-submenu>
		    </el-menu>
		  </el-aside>
		  <el-container>
		    <el-header height="66px">
		    	<el-button type="primary" icon="el-icon-back">退出</el-button>
		    </el-header>
		    <el-main>
		    	<router-view></router-view>
		    </el-main>
		  </el-container>
		</el-container>
		
	</div>
</template>

<script type="text/javascript">
	import './MainComponent.scss'

	export default {
	    methods: {
	      handleOpen(key, keyPath) {
	        console.log(key, keyPath);
	      },
	      handleClose(key, keyPath) {
	        console.log(key, keyPath);
	      }
	    }
	}

</script>