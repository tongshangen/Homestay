<template>
    <div>
        <div class="header_addhouse">
            <p><i class="el-icon-back" @click="back"></i></p>
        </div>
        <div class="main_addhouse">
            <h3>添加房源</h3>
            <ul>
                <li @click="addnewhouse">
                    <span class="left">创建新房源</span>
                    <i class="el-icon-arrow-right"></i>
                </li>
                <li>
                    <span class="left">复制已发布过的房源</span>
                    <i class="el-icon-arrow-right"></i>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import './addhouse.scss'

    export default {
        methods: {
            back: function(){
                // this.$router.push({name:'main_wy'});
                history.back();
            },
            addnewhouse: function(){
                this.$router.push({name:'addnewhouse'});
            }
        }
    }
</script>

