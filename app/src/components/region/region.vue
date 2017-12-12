<template>
    <div class="Region" v-if="arr.length>0">
        <div class="unlimited" style="color:#f00">不限定</div>
        <!-- <p>{{reg}}</p> -->
        <ul>
            <li v-for="(value,key) in arr" v-on:click="position">{{value}}</li>
            <!-- <li v-on:click="position">北京</li>
            <li>盗掘吨</li>
            <li>日本桥</li>
            <li>黑门市场</li>
            <li>环球影城</li>
            <li>梅田</li> -->
        </ul>
    </div>
</template>
<script>
    import axios from 'axios';
    import qs from 'qs'
    import './region.scss';
    export default {
        data:function(){
            return {
                arr:[]
            }
        },
        methods:{
            position: function (eve) {
                
                var el = eve.currentTarget.innerHTML;
                // console.log(el);
                this.$router.push({name: 'list',query: {room_position: el}});
            }
        },
        mounted(){
            // console.log(this.$route.query.reg)
            var rut= this.$route.query.reg;
            axios({
                url: 'http://localhost:3004/distination.php',
                method: 'post',
                data: qs.stringify(),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            }).then(res => {
                console.log(res)
                // this.dataset = res.data;
                res.data.regions.forEach(item =>{
                    if(item.name === rut){
                        if(item.regions){
                            //市
                            item.regions.forEach(aa =>{
                            
                                if(aa.regions){
                                    aa.regions.forEach(bb=>{
                                        // console.log(bb.name)
                                        this.arr.push(bb.name);
                                    })
                                }
                            });
                            // return;
                        }
                    } else {
                         if(item.regions){
                            //市
                            item.regions.forEach(aa =>{
                                if(aa.name == rut){
                                    if(aa.regions){
                                        aa.regions.forEach(bb=>{
                                            // console.log(bb.name)
                                            this.arr.push(bb.name);
                                        })
                                    }
                                }
                            });
                            // return;
                        }
                    }
                });
                
            });

            //  console.log(this.arr)
        }   
    }
</script>

