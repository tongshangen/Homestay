<template>
    <div>
        <div id="header">
            <span><i class="el-icon-back" @click="back"></i></span>
            <!-- <a @click="next">下一步</a> -->
            <a><el-button type="text" @click="open" class="next">下一步</el-button></a>
        </div>
        <div id="main_newhouse">
            <div class="space">
                <h3>空间类型</h3>
                <ul>
                    <li>
                        <div class="left">
                            <p>整套</p>
                            <span>给客人提供整套房子</span>
                        </div>
                        <div class="right">
                            <input type="radio" v-model="space" class="space" value="整套">
                        </div>
                    </li>
                    <li>
                        <div class="left">
                            <p>单间</p>
                            <span>给客人提供单独房间</span>
                        </div>
                        <div class="right">
                            <input type="radio" v-model="space" class="space" value="单间">
                        </div>
                    </li>
                    <li>
                        <div class="left">
                            <p>合住</p>
                            <span>与客人共用一个房间</span>
                        </div>
                        <div class="right">
                            <input type="radio" v-model="space" class="space" value="合住">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="house">
                <h3>房源类型</h3>
                <ul>
                    <li>
                        <span>公寓</span>
                        <input type="radio" v-model="house" value="gy">
                    </li>
                    <li>
                        <span>别墅</span>
                        <input type="radio" v-model="house" value="bs">
                    </li>
                    <li>
                        <span>住宿加早餐</span>
                        <input type="radio" v-model="house" value="zsjzc">
                    </li>
                    <li>
                        <span>Loft</span>
                        <input type="radio" v-model="house" value="loft">
                    </li>
                    <li>
                        <span>排屋</span>
                        <input type="radio" v-model="house" value="pw">
                    </li>
                    <li>
                        <span>独立屋</span>
                        <input type="radio" v-model="house" value="dlw">
                    </li>
                    <li>
                        <span>小木屋</span>
                        <input type="radio" v-model="house" value="xmw">
                    </li>
                    <li>
                        <span>乡村别墅</span>
                        <input type="radio" v-model="house" value="xcbs">
                    </li>
                    <li>
                        <span>城堡</span>
                        <input type="radio" v-model="house" value="cb">
                    </li>
                    <li>
                        <span>宿舍</span>
                        <input type="radio" v-model="house" value="ss">
                    </li>
                    <li>
                        <span>树屋</span>
                        <input type="radio" v-model="house" value="sw">
                    </li>
                    <li>
                        <span>船</span>
                        <input type="radio" v-model="house" value="chuan">
                    </li>
                    <li>
                        <span>飞机</span>
                        <input type="radio" v-model="house" value="airplane">
                    </li>
                    <li>
                        <span>露营车/房车</span>
                        <input type="radio" v-model="house" value="housecar">
                    </li>
                    <li>
                        <span>圆顶小屋</span>
                        <input type="radio" v-model="house" value="ydxw">
                    </li>
                    <li>
                        <span>灯塔</span>
                        <input type="radio" v-model="house" value="dt">
                    </li>
                    <li>
                        <span>蒙古包</span>
                        <input type="radio" v-model="house" value="mgb">
                    </li>
                    <li>
                        <span>圆锥形帐篷</span>
                        <input type="radio" v-model="house" value="yzxzp">
                    </li>
                    <li>
                        <span>洞穴</span>
                        <input type="radio" v-model="house" value="dx">
                    </li>
                    <li>
                        <span>岛屿</span>
                        <input type="radio" v-model="house" value="dy">
                    </li>
                    <li>
                        <span>牧人小屋</span>
                        <input type="radio" v-model="house" value="mrxw">
                    </li>
                    <li>
                        <span>土房</span>
                        <input type="radio" v-model="house" value="tf">
                    </li>
                    <li>
                        <span>小屋</span>
                        <input type="radio" v-model="house" value="xw">
                    </li>
                    <li>
                        <span>火车</span>
                        <input type="radio" v-model="house" value="train">
                    </li>
                    <li>
                        <span>帐篷</span>
                        <input type="radio" v-model="house" value="tent">
                    </li>
                    <li>
                        <span>其他</span>
                        <input type="radio" v-model="house" value="qt">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    import './addnewhouse.scss'

    export default {
        data: function(){
            return {
                space:'',
                house:''
            }
        },
        methods: {
            back: function(){
                history.back();
            },
            open: function(){
                console.log(this);
                if(this.space !='' && this.house != ''){
                    this.$store.state.addnewhouse.spacetype = this.space;
                    localStorage.setItem('spacetype',this.space);
                    this.$router.push({name:'addhouselocation'});
                }else{
                    this.$alert('请完善信息', '', {
                        confirmButtonText: '确定'
                    });
                }
                
            }
        }
    }
</script>

