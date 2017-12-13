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
                <li>
                    <h4>卫生间数量</h4>
                    <div class="xz">
                        <div class="num"><span>{{wcnum}}</span>个</div>
                        <div class="right">
                            <span><i class="el-icon-plus" @click="addwc"></i><i class="el-icon-minus" @click="reducewc"></i></span>
                        </div>
                    </div>
                </li>
                <li>
                    <h4>床数量</h4>
                    <div class="xz">
                        <div class="num"><span>{{bednum}}</span>个</div>
                        <div class="right">
                            <span><i class="el-icon-plus" @click="addbed"></i><i class="el-icon-minus" @click="reducebed"></i></span>
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
                wcnum:0,
                bednum:1,
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
                localStorage.setItem('area',this.area);
                this.$store.state.houseinfo.peoplenum = this.peoplenum;
                localStorage.setItem('peoplenum',this.peoplenum);
                this.$store.state.houseinfo.wcnum = this.wcnum;
                localStorage.setItem('wc',this.wcnum);
                localStorage.setItem('bed',this.bednum);
                this.$store.state.houseinfo.bednum = this.bednum;
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
            },
            reducewc: function(){
                if(this.wcnum <= 0){
                    return;
                }else {
                    this.wcnum--;
                } 
            },
            addwc:function(){
                this.wcnum++;
            },
            reducebed: function(){
                if(this.bednum <= 1){
                    return;
                }else {
                    this.bednum--;
                } 
            },
            addbed:function(){
                this.bednum++;
            }
        },
        mounted: function(){
            this.area = localStorage.getItem('area');
            this.peoplenum = localStorage.getItem('peoplenum');
            this.wcnum = localStorage.getItem('wc');
            this.bednum = localStorage.getItem('bed');
        }
    }
</script>

