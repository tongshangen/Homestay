<template>
    <div class="Sort">
        <ul>
            <li v-for="(value, idx) in dataset" v-if="idx=1" v-on:click="sort" v-bind:id="value.id">{{value.val}}</li>
            <!-- <li class="unlimited" style="color:#f00">默认排序</li>
            <li>低价优先</li>
            <li>高价优先</li>
            <li>好评优先</li> -->
        </ul>
       
    </div>
</template>
<script>
    import './sort.scss';
    export default {
        data:function(){
           return {
                dataset:[{id:'default',val:'默认排序'},{id:'low',val:'低价优先'},{id:'high',val:'高价优先'},{id:'praise',val:'好评优先'}]
            }
        },
        methods:{
            sort: function (eve) {
                var el = eve.currentTarget.id;
                // console.log(el);
                this.$router.push({name: 'list',query: {sort: el}});
            }
        }
    }
</script>

