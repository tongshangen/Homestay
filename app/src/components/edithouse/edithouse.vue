<template>
    <div>
        <div id="header_edithouse">
            <i class="el-icon-back"></i>
            <span>编辑房源</span>
            <a>预览</a>
        </div>
        <div id="main_edithouse">
            <div class="pic"></div>
            <ul>
                <li @click="housedescribe">
                    <div class="left">
                        <p>房源描述</p>
                        <span>填写房源个性化描述</span>
                    </div>
                    <div class="right">
                        <i class="el-icon-arrow-right"></i>
                    </div>
                </li>
                <li @click="houseinfo">
                    <div class="left">
                        <p>房源信息</p>
                        <span>填写房源基本住宿信息</span>
                    </div>
                    <div class="right">
                        <i class="el-icon-arrow-right"></i>
                    </div>
                </li>
                <li @click="houseprice">
                    <div class="left">
                        <p>价格设定</p>
                        <span>设置房子的价格规则</span>
                    </div>
                    <div class="right">
                        <i class="el-icon-arrow-right"></i>
                    </div>
                </li>
                <li @click="housefacility">
                    <div class="left">
                        <p>配套设施</p>
                        <span>设置房子的配套设施</span>
                    </div>
                    <div class="right">
                        <i class="el-icon-arrow-right"></i>
                    </div>
                </li>
                <li>
                    <div class="left">
                        <p>退订政策</p>
                        <span>设置退房退款规则</span>
                    </div>
                    <div class="right">
                        <i class="el-icon-arrow-right"></i>
                    </div>
                </li>
                <li>
                    <div class="left">
                        <p>其他服务(选填)</p>
                        <span>添加接送机等服务</span>
                    </div>
                    <div class="right">
                        <i class="el-icon-arrow-right"></i>
                    </div>
                </li>
            </ul>
            <ul class="ishas">
                <li>
                    <div class="left">
                        <p>房源地址</p>
                        <span></span>
                    </div>
                    <div class="right">
                        <i class="el-icon-arrow-right"></i>
                    </div>
                </li>
                <li>
                    <div class="left">
                        <p>房源类型</p>
                        <span></span>
                    </div>
                    <div class="right">
                        <i class="el-icon-arrow-right"></i>
                    </div>
                </li>
            </ul>      
        </div>
    </div>
</template>

<script>
    import './edithouse.scss'
    export default {
        methods: {
            housedescribe: function(){
                this.$router.push({name:'housedescribe'});
            },
            houseinfo: function(){
                this.$router.push({name:'houseinfo'});
            },
            houseprice: function(){
                this.$router.push({name:'houseprice'});
            },
            housefacility: function(){
                this.$router.push({name:'housefacility'});
            }
        }
    }
</script>

