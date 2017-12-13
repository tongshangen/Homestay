<template>
    <!-- <el-table
        v-loading="loading"  style="width: 100%"> -->
    <div class="Destination">
        <div class="sherch"><i class="el-icon-search"></i><input type="text" v-model="region" placeholder="搜索想去的目的地、景点"  @keyup="show($event)"><span @click="cancle">取消</span></div> 
        <div class="Citys">
            <div class="hot_citys">
                <h3>热门城市</h3>
                <ul v-if="hot_citys.length > 0">
                    <li v-for="(value, key) in hot_citys" @click="sherch">{{value}}</li>
                </ul>
            </div>
            <div class="citys">
                <!-- <h3>城市</h3> -->
                <ul v-if="hot_citys.length > 0">
                    <li v-for="(obj, key) in pinyin">
                        <span>{{key}}</span>
                        <!-- <span >{{value}}</span> -->
                        <ul>
                            <li v-for="(value,key) in obj" @click="sherch">{{value}}</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- </el-table> -->
</template>

<style>
  body {
    margin: 0;
  }
</style>
<script>
    import axios from 'axios';
    import qs from 'qs'
    import './destination.scss'
    export default {
        data:function(){
            return {
                hot_citys:[],
                pinyin:{A:[],B:[],C:[],D:[],E:[],F:[],G:[],H:[],J:[],K:[],L:[],M:[],N:[],P:[],Q:[],R:[],S:[],T:[],W:[],X:[],Y:[],Z:[]},
                region:'',
            }
        },
        mounted(){
            axios({
                url: 'http://localhost:3004/distination.php',
                method: 'get'
            }).then(res => {
                // console.log(res.data)
                // this.dataset = res.data;
                 res.data.regions.forEach((item)=>{
                   // console.log(item['regions'])
                    if(item.hot == true){
                        this.hot_citys.push(item.name);
                    }
                    let zimu = item.pinyin.slice(0,1)
                    for(let i in this.pinyin){
                        if(i === zimu){
                            this.pinyin[i].push(item.name)
                        }
                    }
                    if(item['regions']){
                        item['regions'].forEach((item)=>{
                            if(item.hot === true){
                                this.hot_citys.push(item.name);
                            }

                            //遍历每个市
                            if(item.pinyin){
                               let zimu = item.pinyin.slice(0,1);
                               for(let i in this.pinyin){
                                    if(i === zimu){
                                        this.pinyin[i].push(item.name);
                                    }
                                }
                            }
                        });
    
                    }
                   
                });
                // console.log(this.pinyin)
            });
        },
        methods:{
            show: function (ev) {
                if(ev.keyCode==13){
                    // alert(this.region)
                    this.$router.push({name: 'list',query: {room_position: this.region}});
                }
            },
            sherch:function(eve){
                var el = eve.currentTarget.innerHTML;
                
                // if(el.indexOf('市')>0){
                //     el = el.slice(0,el.indexOf('市'))
                // }
                // console.log(el);
                this.$router.push({name: 'list',query: {room_position: el}});
            },
            cancle:function(){
                this.$router.push({name: 'main'});
            }
        }
    };
</script>