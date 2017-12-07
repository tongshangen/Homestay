<template>
    <div class="main_fd_order">
        <div id="header">
            <div class="header_house">
                <h3>我的房源<span>添加</span></h3>
            </div>
        </div>
        <div id="nav">
            <Nav_house_wy></Nav_house_wy>
            <router-view></router-view>
        </div>
        <div id="footer">
            <Footer_wy></Footer_wy> 
            <router-view></router-view> 
        </div>
    </div>
</template>

<script>
    var wd = document.documentElement.clientWidth*window.devicePixelRatio/10;
    // document.getElementsByTagName("html")[0].style.fontSize = wd + "px";
    var scale = 1/window.devicePixelRatio;
    var mstr = 'initial-scale='+ scale +', maximum-scale='+ scale +', minimum-scale='+ scale +', user-scalable=no';
    document.getElementById("vp").content = mstr;

    import './house_wy.scss'
    import Nav_house_wy from '../nav_house_wy/nav_house_wy.vue'
    import Footer_wy from '../footer_wy/footer_wy.vue'

    export default {
        name: 'nav',
        components: {
            Nav_house_wy,
            Footer_wy
        }
    }
</script>

