<template>
	<el-table  style="width: 100%;">
            <el-table-column type="selection" width="55">
            </el-table-column>
            <el-table-column type="index" width="60">
            </el-table-column>
            <el-table-column  label="姓名" width="120" sortable>
            </el-table-column>
            <el-table-column  label="性别" width="100"  sortable>
            </el-table-column>
            <el-table-column  label="年龄" width="100" sortable>
            </el-table-column>
            <el-table-column  label="生日" width="120" sortable>
            </el-table-column>
            <el-table-column  label="地址" min-width="180" sortable>
            </el-table-column>
            <el-table-column label="操作" width="150">
                <template scope="scope">
                    <el-button size="small" @click="handleEdit(scope.$index, scope.row)">编辑</el-button>
                    <el-button type="danger" size="small" @click="handleDel(scope.$index, scope.row)">删除</el-button>
                </template>
            </el-table-column>
        </el-table>

</template>

<script>
	export default{

	}
</script>