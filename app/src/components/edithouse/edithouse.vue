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
                <input type="button" value="删除房源" @click="delhouse">
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
                // localStorage.setItem('title',this.$store.state.housedes.title); 
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
                var s = sessionStorage.getItem("name");
                axios({
                    url: 'http://localhost:1133/sel_user_id.php',
                    method: 'post',
                    data: qs.stringify({
                        user_tel:s
                    }),
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;'
                    }
                }).then(res => {
                    var user_id = res.data[0].user_id;
                    if(this.$store.state.housedes.title == localStorage.getItem('title')){
                        axios({
                            url: 'http://localhost:1133/room_wy_update.php',
                            method: 'post',
                            data: qs.stringify({
                                room_name: localStorage.getItem('title'),room_position:localStorage.getItem('city'),nearby:localStorage.getItem('nearby'),room_size:localStorage.getItem('area'),room_type:localStorage.getItem('spacetype'),max_people:localStorage.getItem('peoplenum'),price:localStorage.getItem('price'),
                                device:localStorage.getItem('dev'),
                                bed:localStorage.getItem('bed'),
                                wc:localStorage.getItem('wc')
                            }),
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded;'
                            }
                        }).then(res => {
                            console.log(res);
                            if(res.data == 'ok'){
                                this.$router.push({name:'main_wy'});
                            }else{
                                alert('修改房源信息有误！');
                            }
                            
                        })
                    }else{
                        axios({
                            url: 'http://localhost:1133/room_wy_insert.php',
                            method: 'post',
                            data: qs.stringify({
                                room_name: this.$store.state.housedes.title,room_position:this.$store.state.houselocation.city,nearby:this.$store.state.houselocation.near,room_size:this.$store.state.houseinfo.area,room_type:this.$store.state.addnewhouse.spacetype,max_people:this.$store.state.houseinfo.peoplenum,price:this.$store.state.houseprice.price,
                                device:this.$store.state.housefacility.desdata,
                                bed:this.$store.state.houseinfo.bednum,
                                wc:this.$store.state.houseinfo.wcnum,
                                user_id:user_id
                            }),
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded;'
                            }
                        }).then(res => {
                            console.log(res);
                            if(res.data == 'ok'){
                                this.$router.push({name:'main_wy'});
                            }else{
                                alert('添加房源信息有误！');
                            }
                            
                        })
                    }                 
                    
                })
                
            },
            delhouse:function(){
                axios({
                    url: 'http://localhost:1133/room_wy_del.php',
                    method: 'post',
                    data: qs.stringify({
                        room_name: this.$store.state.housedes.title
                    }),
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;'
                    }
                }).then(res => {
                    // console.log(res);
                    if(res.data == 'ok'){
                        this.$router.push({name:'main_wy'});
                    }else{
                        alert('删除房源信息有误！');
                    }
                    
                })
            },
            handleRemove(file, fileList) {
                // console.log(file, fileList);
            },
            handlePictureCardPreview(file) {
                this.dialogImageUrl = file.url;
                this.dialogVisible = true;
            }
        },
        mounted: function(){
            // localStorage.setItem('title',this.$store.state.housedes.title); 
            // localStorage.setItem('city',this.$store.state.houselocation.city);
            // localStorage.setItem('nearby',this.$store.state.houselocation.near);
            // localStorage.setItem('area',this.$store.state.houselocation.area);
            // localStorage.setItem('spacetype',this.$store.state.houselocation.spacetype);
            // localStorage.setItem('peoplenum',this.$store.state.houselocation.peoplenum);
            // localStorage.setItem('price',this.$store.state.houselocation.price);
            // localStorage.setItem('dev',this.$store.state.houselocation.desdata);
            // localStorage.setItem('bed',this.$store.state.houselocation.bed);
            // localStorage.setItem('wc',this.$store.state.houselocation.wc);
        }
    }
</script>


