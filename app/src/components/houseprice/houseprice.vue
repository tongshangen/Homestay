<template>
    <div>
        <div id="header_houseprice">
            <span><i class="el-icon-back" @click="back"></i></span>
            <a @click="save">保存</a>
        </div>
        <div id="main_houseprice">
            <div class="baseprice">
                <h3>基础费用</h3>
                <ul>
                    <li>
                        <h4>每晚价格</h4>
                        <div class="price">
                            <span>￥</span><input type="text" v-model="price">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    import './houseprice.scss'
    export default {
        data: function(){
            return{
                price:null
            }
        },
        methods: {
            back: function(){
                history.back();
            },
            save: function(){
                this.$store.state.houseprice.price = this.price;
                localStorage.setItem('price',this.price);
                this.$router.push({name:'edithouse'});
            }
        },
        mounted: function(){
            this.price = localStorage.getItem('price');
        }
    }
</script>

