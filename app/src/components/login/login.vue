<template>
    <div class="Main">
        <h3>测试</h3>
        <button @click="give">提交</button>
    </div>
    
</template>
<script>
    import axios from 'axios'
    import qs from 'qs'
    export default {
        data() {
            return{
                res:''
            }
        },
        methods: {
            give() {
                axios({
                    url: 'http://10.3.135.244:8008/PHP/order_status.php',
                    method: 'post',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                }).then(res=>{
                    console.log(res)
                })
            }
        }
    }
</script>