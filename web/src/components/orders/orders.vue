/*
后台房源信息管理
 */
<template>
    <section>
    <el-table   :data="tableData" style="width: 100%;text-align:center;">
            <el-table-column type="selection" width="30">
            </el-table-column>
            <el-table-column prop="order_id" label="订单编号" style="overflow:hidden;width:40px;" >
            </el-table-column>

            <el-table-column prop="img_url" label="图片路径"  style="overflow:hidden;width:20px;">
            </el-table-column>
            <el-table-column prop="people" label="入住人数" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="need_number" label="订房数" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="room_id" label="房间编号" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="user_id" label="用户编号" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="nickname" label="昵称" style="overflow:hidden;width:40px;" >
            </el-table-column>
            <el-table-column prop="user_tel" label="电话" style="overflow:hidden;width:30px;" >
            </el-table-column>
            
            <el-table-column prop="status" label="入住状态" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="stay_time" label="停留时间" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="leave_time" label="离开时间" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="total" label="总价" style="overflow:hidden;width:30px;" >
            </el-table-column>
            
            <el-table-column prop="remark" label="备注" style="overflow:hidden;width:30px;" >

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
                <el-form-item label="图片路径" >
                    <el-input auto-complete="off" v-model="editForm.img_url" ></el-input>
                </el-form-item>
                <el-form-item label="离开时间" >
                    <el-input auto-complete="off" v-model="editForm.leave_time"></el-input>
                </el-form-item><el-form-item label="需要房间" >
                    <el-input auto-complete="off" v-model="editForm.need_number"></el-input>
                </el-form-item><el-form-item label="用户昵称" >
                    <el-input auto-complete="off" v-model="editForm.nickname"></el-input>
                </el-form-item><el-form-item label="联系用户" >
                    <el-input auto-complete="off" v-model="editForm.user_tel"></el-input>
                </el-form-item><el-form-item label="入住状态" >
                    <el-input auto-complete="off" v-model="editForm.status"></el-input>
                </el-form-item><el-form-item label="停留时间" >
                    <el-input auto-complete="off" v-model="editForm.stay_time"></el-input>
                </el-form-item><el-form-item label="总价" >
                    <el-input auto-complete="off" v-model="editForm.total"></el-input>
                </el-form-item><el-form-item label="用户编号" >
                    <el-input auto-complete="off" v-model="editForm.user_id"></el-input>
                </el-form-item>
                <el-form-item label="订单编号" >
                    <el-input auto-complete="off"v-model="editForm.order_id"></el-input>
                </el-form-item><el-form-item label="入住人数" >
                    <el-input auto-complete="off" v-model="editForm.people"></el-input>
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
                <el-form-item label="图片路径" >
                    <el-input auto-complete="off" v-model="addForm.img_url"></el-input>
                </el-form-item>
                <el-form-item label="离开时间" >
                    <el-input auto-complete="off" v-model="addForm.leave_time"></el-input>
                </el-form-item><el-form-item label="订房数量" >
                    <el-input auto-complete="off" v-model="addForm.need_number"></el-input>
                </el-form-item><el-form-item label="用户昵称" >
                    <el-input auto-complete="off" v-model="addForm.nickname"></el-input>
                </el-form-item><el-form-item label="联系用户" >
                    <el-input auto-complete="off" v-model="addForm.user_tel"></el-input>
                </el-form-item><el-form-item label="入住状态" >
                    <el-input auto-complete="off" v-model="addForm.status"></el-input>
                </el-form-item><el-form-item label="停留时间" >
                    <el-input auto-complete="off" v-model="addForm.stay_time"></el-input>
                </el-form-item><el-form-item label="总价" >
                    <el-input auto-complete="off" v-model="addForm.total"></el-input>
                </el-form-item><el-form-item label="用户编号" >
                    <el-input auto-complete="off" v-model="addForm.user_id"></el-input>
                </el-form-item>
                <el-form-item label="订单编号" >
                    <el-input auto-complete="off"v-model="addForm.order_id"></el-input>
                </el-form-item><el-form-item label="入住人数" >
                    <el-input auto-complete="off" v-model="addForm.people"></el-input>
               
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
 
            this.axios.get(base+'get_orders.php',{
                    params:{
                 }
                }).then(res =>{
                      console.log(res.data)
                    res.data.map(function(item){
                    if(item.review ==undefined){
                        item.review =0;
                    }
                     tableData.push({
                        img_url:item.img_url,
                        leave_time:item.leave_time,
                        need_number:item.need_number,
                        nickname:item.nickname,
                        user_tel:item.user_tel,
                        room_id:item.room_id,
                        status:item.status,
                        stay_time:item.img_url,
                        total:'$'+item.total,
                        user_id:item.user_id,
                        remark:item.remark,
                        order_id:item.order_id,
                        people:item.people,
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
                
                let para = { img_url: row.img_url*1};
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
                            para.img_url*=1;
                            this.axios.get(base+'updateOrder.php',{params:para}).then((res) => {
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
                        para.target='order';
                        
                        
                        this.axios.get(base+'addroom.php',{params:para}).then((res) => {
                            this.addLoading = false;
                            //NProgress.done();
                            this.$message({
                                message: '提交成功',
                                type: 'success'
                            });
                            this.$refs['addForm'].resetFields();
                            this.addFormVisible = false;
                            this.getRooms();
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
