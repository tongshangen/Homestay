<template>
    <div>
        <div id="header_houseinfo">
            <span><i class="el-icon-back" @click="back"></i></span>
            <a @click="save">保存</a>
        </div>
        <div id="main_houseinfo">
            <h3>房源信息</h3>
            <ul>
                <li>
                    <h4>房屋户型</h4>
                    <input type="text" placeholder="1室0厅0阳台" v-model="hx">
                </li>
                <li>
                    <h4>房屋面积</h4>
                    <input type="text" placeholder="平方米" v-model="area">
                </li>
            </ul>
            <h3>入住</h3>
            <ul>
                <li>
                    <h4>可住人数</h4>
                    <div class="xz">
                        <div class="num"><span>{{peoplenum}}</span>人</div>
                        <div class="right">
                            <span><i class="el-icon-plus" @click="addpeople"></i><i class="el-icon-minus" @click="reducepeople"></i></span>
                        </div>
                    </div>
                </li>
                <li>
                    <h4>最短入住天数</h4>
                    <div class="xz">
                        <div class="num"><span>{{daynum}}</span>天</div>
                        <div class="right">
                            <span><i class="el-icon-plus" @click="addday"></i><i class="el-icon-minus" @click="reduceday"></i></span>
                        </div>
                    </div>
                </li>
                <ul>
                <li>
                    <h4>最早入住时间</h4>
                    <input type="text" placeholder="12:00" v-model="staytime">
                </li>
                <li>
                    <h4>最晚退房时间</h4>
                    <input type="text" placeholder="12:00" v-model="leavetime">
                </li>
            </ul>
            </ul>
        </div>
    </div>
</template>

<script>
    import './houseinfo.scss'
    export default {
        data: function(){
            return {
                hx: '1室0厅0阳台',
                area : '',
                peoplenum:1,
                daynum:1,
                staytime:'',
                leavetime:''
            }
        },
        methods: {
            back: function(){
                history.back();
            },
            save: function(){
                this.$store.state.houseinfo.hx = this.hx;
                this.$store.state.houseinfo.area = this.area;
                this.$store.state.houseinfo.peoplenum = this.peoplenum;
                this.$store.state.houseinfo.staytime = this.staytime; 
                this.$store.state.houseinfo.leavetime = this.leavetime;   
                this.$store.dispatch('increment');
                this.$router.push({name:'edithouse'});
            },
            reducepeople: function(){
                if(this.peoplenum <= 1){
                    return;
                }else {
                    this.peoplenum--;
                } 
            },
            addpeople: function(){
                this.peoplenum++;
            },
            reduceday: function(){
                if(this.daynum <= 1){
                    return;
                }else {
                    this.daynum--;
                } 
            },
            addday:function(){
                this.daynum++;
            }
        }
    }
</script>

