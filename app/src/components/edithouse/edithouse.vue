<template>
    <div>
        <div id="header_edithouse">
            <i class="el-icon-back" @click="back"></i>
            <span>编辑房源</span>
            <a>预览</a>
        </div>
        <div id="main_edithouse">
            <div class="pic">
                <el-upload
                    action="https://jsonplaceholder.typicode.com/posts/"
                    list-type="picture-card"
                    :on-preview="handlePictureCardPreview"
                    :on-remove="handleRemove">
                    <i class="el-icon-plus"></i>
                </el-upload>
                <el-dialog :visible.sync="dialogVisible" size="tiny">
                    <img width="100%" :src="dialogImageUrl" alt="">
                </el-dialog>
            </div>
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
            <div class="edit">
                <input type="button" value="删除房源">
            </div>
        </div>
        <div id="footer_edithouse">
            <p @click="addhouse">发布房源</p>
        </div>
    </div>
</template>

<script>
    import './edithouse.scss'
    import axios from 'axios'
    import qs from 'qs'

    export default {
        data: function(){
            return {
                dialogImageUrl: '',
                dialogVisible: false
            }
        },
        methods: {
            back: function(){
                history.back();
            },
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
            },
            addhouse: function(){
                axios({
                    url: 'http://localhost:1133/room_wy.php',
                    method: 'post',
                    data: qs.stringify({
                        room_name: this.$store.state.housedes.title,room_position:this.$store.state.houselocation.city,nearby:this.$store.state.houselocation.near,room_size:this.$store.state.houseinfo.area,room_type:this.$store.state.addnewhouse.spacetype,max_people:this.$store.state.houseinfo.peoplenum,price:this.$store.state.houseprice.price,
                        device:this.$store.state.housefacility.desdata
                    }),
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;'
                    }
                }).then(res => {
                    if(res.data == 'ok'){
                        this.$router.push({name:'main_wy'});
                    }else{
                        alert('添加房源信息有误！');
                    }
                    
                })
            },
            handleRemove(file, fileList) {
                console.log(file, fileList);
            },
            handlePictureCardPreview(file) {
                this.dialogImageUrl = file.url;
                this.dialogVisible = true;
            }
        },
        mounted: function(){
            // this.title = localStorage.getItem('title');
            // console.log(this);
            // console.log(this.$store.state.housedes,this.$store.state.houseinfo,this.$store.state.houselocation,this.$store.state.houseprice,this.$store.state.housefacility);
        }
    }
</script>

