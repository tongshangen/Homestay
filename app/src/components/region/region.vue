<template>
    <div class="Region">
        <div class="unlimited" style="color:#f00">不限定</div>
        <ul>
            <li v-on:click="position">北京</li>
            <li>盗掘吨</li>
            <li>日本桥</li>
            <li>黑门市场</li>
            <li>环球影城</li>
            <li>梅田</li>
        </ul>
    </div>
</template>
<script>
    import './region.scss';
    export default {
        methods:{
            position: function (eve) {
                
                var el = eve.currentTarget.innerHTML;
                console.log(el);
                this.$router.push({name: 'list',query: {room_position: el}});
            }
        }
    }
</script>

