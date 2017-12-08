<template>
    <div>
        <div id="header">
            <span><i class="el-icon-back" @click="back"></i></span>
            <a @click="save">保存</a>
        </div>
        <div id="main">
            <h3>房源信息</h3>
            <ul>
                <li>
                    <h4>房屋户型</h4>
                    <input type="text" placeholder="1室0厅0阳台">
                </li>
                <li>
                    <h4>房屋户型</h4>
                    <input type="text" placeholder="平方米">
                </li>
            </ul>
            <h3>入住</h3>
            <ul>
                <li>
                    <h4>可住人数</h4>
                    <div class="xz">
                        <div class="num"><span>1</span>人</div>
                        <div class="right">
                            <span><i class="el-icon-plus"></i><i class="el-icon-minus"></i></span>
                        </div>
                    </div>
                </li>
                <li>
                    <h4>最短入住天数</h4>
                    <div class="xz">
                        <div class="num"><span>1</span>天</div>
                        <div class="right">
                            <span><i class="el-icon-plus"></i><i class="el-icon-minus"></i></span>
                        </div>
                    </div>
                </li>
                <ul>
                <li>
                    <h4>最早入住时间</h4>
                    <input type="text" placeholder="12:00">
                </li>
                <li>
                    <h4>最晚退房时间</h4>
                    <input type="text" placeholder="12:00">
                </li>
            </ul>
            </ul>
        </div>
    </div>
</template>

<script>
    import './houseinfo.scss'
    export default {
        methods: {
            back: function(){
                history.back();
            },
            save: function(){}
        }
    }
</script>

