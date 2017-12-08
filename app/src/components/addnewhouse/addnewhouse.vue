<template>
    <div>
        <div id="header">
            <span><i class="el-icon-back" @click="back"></i></span>
            <a @click="next">下一步</a>
        </div>
        <div id="main">
            <div class="space">
                <h3>空间类型</h3>
                <ul>
                    <li>
                        <div class="left">
                            <p>整套</p>
                            <span>给客人提供整套房子</span>
                        </div>
                        <div class="right">
                            <input type="radio" name="space" id="">
                        </div>
                    </li>
                    <li>
                        <div class="left">
                            <p>单间</p>
                            <span>给客人提供单独房间</span>
                        </div>
                        <div class="right">
                            <input type="radio" name="space" id="">
                        </div>
                    </li>
                    <li>
                        <div class="left">
                            <p>合住</p>
                            <span>与客人共用一个房间</span>
                        </div>
                        <div class="right">
                            <input type="radio" name="space" id="">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="house">
                <h3>房源类型</h3>
                <ul>
                    <li>
                        <span>公寓</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>别墅</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>住宿加早餐</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>Loft</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>排屋</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>独立屋</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>小木屋</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>乡村别墅</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>城堡</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>宿舍</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>树屋</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>船</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>飞机</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>露营车/房车</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>圆顶小屋</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>灯塔</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>蒙古包</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>圆锥形帐篷</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>洞穴</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>岛屿</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>牧人小屋</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>土房</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>小屋</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>火车</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>帐篷</span>
                        <input type="radio" name="house" id="">
                    </li>
                    <li>
                        <span>其他</span>
                        <input type="radio" name="house" id="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    import './addnewhouse.scss'

    export default {
        methods: {
            back: function(){
                history.back();
            },
            next: function(){
                this.$router.push({name:'addhouselocation'});
            }
        }
    }
</script>

