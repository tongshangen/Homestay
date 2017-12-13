<template>
    <div>
        <div id="header_housedes">
            <span><i class="el-icon-back" @click="back"></i></span>
            <a @click="save">保存</a>
        </div>
        <div id="main_housedes">
            <h3>房源描述</h3>
            <div class="title">
                <div class="header">
                    <p>房源标题</p>
                    <!-- <a>未完成</a> -->
                    <!-- <textarea name="" id="" style="border:0;overflow:hidden;"></textarea> -->
                </div>
                <div class="cont">
                    <input type="text" placeholder="吸引人的标题: 地点+房源描述词" v-model="title">
                    <!-- <p>吸引人的标题: 地点+房源描述词</p> -->
                </div>
            </div>
            <div class="special">
                <div class="header">
                    <p>房屋特色</p>
                    <!-- <a>未完成</a> -->
                </div>
                <div class="cont">
                    <!-- <input type="text" placeholder="告诉大家房子的特点"> -->
                    <textarea name="" id="" placeholder="告诉大家房子的特点" v-model="special"></textarea>
                    <!-- <p>告诉大家房子的特点</p> -->
                </div>
            </div>
            <div class="other">
                <div class="header">
                    <p>其他（选填）</p>
                </div>
                <div class="cont">
                    <!-- <input type="text" placeholder="可以添加一些交通、周边等信息"> -->
                    <textarea name="" id="" placeholder="可以添加一些交通、周边等信息" v-model="cont"></textarea>
                    <!-- <p>可以添加一些交通、周边等信息</p> -->
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import './housedescribe.scss'

    export default {
        data: function(){
            return {
                title:'',
                special:'',
                cont:''
            }
        },
        methods: {
            back: function(){
                history.back();
            },
            save: function(){
                this.$store.state.housedes.title = this.title;
                this.$store.state.housedes.special = this.special;
                this.$store.state.housedes.cont = this.cont;
                // localStorage.setItem('title' , this.title);
                this.$store.dispatch('increment');
                this.$router.push({name:'edithouse'});
            }
        },
        mounted: function(){
            this.title = localStorage.getItem('title');
        }
    }
</script>

