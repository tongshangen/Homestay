/*
后台房源信息管理
 */
<template>
    <section>
  <el-table   :data="tableData" style="width: 100%;text-align:center;">
            <el-table-column type="selection" width="30">
            </el-table-column>
            <el-table-column prop="hotel_id" label="房东ID"  style="overflow:hidden;width:20px;">
            </el-table-column>
            <el-table-column prop="hotel_name" label="房东名" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="hotel_tel" label="房东电话" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="hotel_about" label="房东故事" style="overflow:hidden;width:40px;" >
            </el-table-column>
           
            <el-table-column label="操作" width="150">
                <template scope="scope">
                    <el-button size="small" type="primary"  @click="handleEdit(scope.$index, scope.row)">编辑</el-button>
                    <el-button type="success" @click="handleAdd(scope.$index, scope.row)">新增</el-button>
                    <el-button type="danger" size="small" @click="handleDel(scope.$index, scope.row)">删除</el-button>
                </template>
            </el-table-column>

    </el-table>
    <!--编辑界面-->
           
            <el-dialog title="编辑" :visible.sync="dialogVisible" :before-close="handleClose">
            <el-form  label-width="80px" :model="editForm" ref="editForm" >
                
                <el-form-item label="房东名" >
                    <el-input auto-complete="off" v-model="editForm.hotel_name"></el-input>
                </el-form-item>
                <el-form-item label="房东电话" >
                    <el-input auto-complete="off" v-model="editForm.hotel_tel"></el-input>
                </el-form-item>
                <el-form-item label="房东故事" >
                    <el-input auto-complete="off" v-model="editForm.hotel_about"></el-input>
                </el-form-item>
             
            </el-form>
            <div slot="footer" class="dialog-footer">
                <el-button @click="dialogVisible = false">取消</el-button>
                <el-button type="primary" @click.native="editSubmit" >提交</el-button>
            </div>
        </el-dialog>
<!-- 新增 -->
        <el-dialog title="新增" :visible.sync="addFormVisible" :close-on-click-modal="false">
            <el-form  label-width="80px" :model="addForm" ref="addForm" >
                
                <el-form-item label="房东名" >
                    <el-input auto-complete="off" v-model="addForm.hotel_name"></el-input>
                </el-form-item>
                <el-form-item label="房东电话" >
                    <el-input auto-complete="off" v-model="addForm.hotel_tel"></el-input>
                </el-form-item>
                <el-form-item label="房东故事" >
                    <el-input auto-complete="off" v-model="addForm.hotel_about"></el-input>
                </el-form-item>
            
            </el-form>
            <div slot="footer" class="dialog-footer">
                <el-button @click.native="addFormVisible = false">取消</el-button>
                <el-button type="primary" @click.native="addSubmit" :loading="addLoading">提交</el-button>
            </div>
        </el-dialog>
    </section>
</template>

<script>
    let tableData =[];
    let base='http://localhost/wy/PHP/';
     export default {
      data() {
        return {
          tableData,
           dialogVisible: false,
                editLoading: false,
                //编辑界面数据
                editForm: {
                    id: 0,
                    name: '',
                    sex: -1,
                    age: 0,
                    birth: '',
                    addr: ''
                },
                addFormVisible: false,//新增界面是否显示
                addLoading: false,
                //新增界面数据
                addForm: {
                    name: '',
                    sex: -1,
                    age: 0,
                    birth: '',
                    addr: ''
                }

        }
      },
      methods:{
        getRooms:function(){
            this.axios.get(base+'get_allhotel.php',{
                    params:{
                 }
                }).then(res =>{
                     // console.log(res.data)
                    res.data.map(function(item){
                    if(item.review ==undefined){
                        item.review =0;
                    }
                     tableData.push({
                        hotel_id:item.hotel_id,
                        hotel_name:item.hotel_name,
                        hotel_tel:item.hotel_tel,
                        hotel_about:item.hotel_about,
                      
                     });   
                    })
                    
                })
       
        },
        //删除
        handleDel: function (index, row) {
            this.$confirm('确认删除该记录吗?', '提示', {
                type: 'warning'
            }).then(() => {
                this.listLoading = true;
                //NProgress.start();
                
                let para = { hotel_id: row.hotel_id*1};
                para.target="hotel";
                this.axios.get(base+'delete.php',{params:para}).then((res) => {
                        // this.listLoading = false;
                        //NProgress.done();
                        this.$message({
                            message: '删除成功',
                            type: 'success'
                        });
                        this.getRooms();
                    });
            });
        },
        editSubmit: function () {
               
                this.$refs.editForm.validate((valid) => {
                    if (valid) {
                        this.$confirm('确认提交吗？', '提示', {}).then(() => {
                            this.editLoading = true;
                            //NProgress.start();
                            let para = Object.assign({}, this.editForm);
                            para.hotel_id*=1;
                            this.axios.get(base+'update_hotel.php',{params:para}).then((res) => {
                                this.editLoading = false;
                                //NProgress.done();
                                this.$message({
                                    message: '提交成功',
                                    type: 'success'
                                });
                                this.$refs['editForm'].resetFields();
                                 this.dialogVisible = false;
                                this.getRooms();
                            });
                        });
                    }
                });
            },
        //新增
        addSubmit: function () {
            this.$refs.addForm.validate((valid) => {
                if (valid) {
                    this.$confirm('确认提交吗？', '提示', {}).then(() => {
                        this.addLoading = true;
                        //NProgress.start();
                        let para = Object.assign({}, this.addForm);
                        
                        
                        // para.room_id*=1;
                        this.axios.get(base+'addhotel.php',{params:para}).then((res) => {
                            this.addLoading = false;
                            //NProgress.done();
                            this.$message({
                                message: '提交成功',
                                type: 'success'
                            });
                            this.$refs['addForm'].resetFields();
                            this.addFormVisible = false;
                            this.getUsers();
                        });
                    });
                }
            });
        },
        //显示编辑界面
        handleEdit: function (index, row) {
                this.dialogVisible = true;
                this.editFormVisible = true;
                this.editForm = Object.assign({}, row);
                console.log(this.editForm)
            },
        //显示新增
        handleAdd: function (index, row) {
                this.addFormVisible = true;
                this.addForm = Object.assign({}, row);
                
            },
        handleClose:function(done) {
        this.$confirm('确认关闭？')
          .then(_ => {
            done();
          })
          .catch(_ => {});
      }
      },
      mounted(){
        this.getRooms();
      }
    }
</script>
<style lang="scss"  type="text/css">
  .el-table th>.cell {
    text-align: center;
}
</style>