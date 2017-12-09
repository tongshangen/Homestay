<template>
    <div>
        <div id="header_fac">
            <span><i class="el-icon-back" @click="back"></i></span>
            <a @click="save">保存</a>
        </div>
        <div id="main_housefac">
            <div class="basefacility">
                <h3>基础设施</h3>
                <ul>
                    <li>全部</li>
                    <li>电视</li>
                    <li>空调</li>
                    <li>冰箱</li>
                    <li>洗衣机</li>
                    <li>WIFI</li>
                    <li>饮水设备</li>
                    <li>厨具</li>
                    <li>暖气</li>
                    <li>电风扇</li>
                    <li>电梯</li>
                    <li>24小时热水</li>
                    <li>熨斗</li>
                    <li>烘干机</li>
                    <li>室内壁炉</li>
                    <li>免费早餐</li>
                </ul>
            </div>
            <div class=" dailyuse">
                <h3>生活用品</h3>
                <ul>
                    <li>全部</li>
                    <li>牙具</li>
                    <li>毛巾</li>
                    <li>拖鞋</li>
                    <li>洗发水</li>
                    <li>沐浴露</li>
                    <li>卫生纸</li>
                    <li>香皂</li>
                    <li>衣挂</li>
                    <li>淋浴</li>
                    <li>浴缸</li>
                    <li>吹风机</li>
                </ul>
            </div>
            <div class="otherfacility">
                <h3>其他设施</h3>
                <ul>
                    <li>全部</li>
                    <li>健身房</li>
                    <li>游泳池</li>
                    <li>门卫</li>
                    <li>门禁系统</li>
                    <li>灭火器</li>
                    <li>无线对讲机</li>
                    <li>免费停车场</li>
                    <li>应急包</li>
                    <li>无障碍设施</li>
                    <li>烟雾探测器</li>
                    <li>CO探测器</li>
                </ul>
            </div>
            <div class="state">
                <h3>特殊说明</h3>
                <ul>
                    <li>全部</li>
                    <li>允许吸烟</li>
                    <li>允许携带宠物</li>
                    <li>允许做饭</li>
                    <li>欢迎家庭入住</li>
                    <li>允许聚会</li>
                    <li>有养宠物</li>
                    <li>可携带小孩</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    import './housefacility.scss'
    export default {
        methods: {
            back: function(){
                history.back();
            },
            save: function(){}
        }
    }
</script>

