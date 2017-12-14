/*
后台房源信息管理
 */
<template>
    <section>
	<el-table   :data="tableData" style="width: 100%;text-align:center;">
            <el-table-column type="selection" width="30">
            </el-table-column>
            <el-table-column prop="room_id" label="room_id"  style="overflow:hidden;width:20px;">
            </el-table-column>
            <el-table-column prop="room_name" label="name" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="hotel_id" label="hotel_id" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="room_position" label="位置" style="overflow:hidden;width:40px;" >
            </el-table-column>
            <el-table-column prop="room_size" label="面积" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="room_type" label="户型" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="max_people" label="可住人数" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="imgUrl" label="imgUrl" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="price" label="price" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="device" label="配套" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="bedroom" label="剩余房间" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="wc" label="洗手间" style="overflow:hidden;width:40px;" >
            </el-table-column>
            <el-table-column prop="nearby" label="周边" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="about" label="关于" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="review" label="评价" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="check_in" label="入住" style="overflow:hidden;width:30px;" >
            </el-table-column>
            <el-table-column prop="check_out" label="离开" style="overflow:hidden;width:30px;" >
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
                <el-form-item label="room_id" >
                    <el-input auto-complete="off" v-model="editForm.room_id" ></el-input>
                </el-form-item>
                <el-form-item label="name" >
                    <el-input auto-complete="off" v-model="editForm.room_name"></el-input>
                </el-form-item><el-form-item label="hotel_id" >
                    <el-input auto-complete="off" v-model="editForm.hotel_id"></el-input>
                </el-form-item><el-form-item label="位置" >
                    <el-input auto-complete="off" v-model="editForm.room_position"></el-input>
                </el-form-item><el-form-item label="面积" >
                    <el-input auto-complete="off" v-model="editForm.room_size"></el-input>
                </el-form-item><el-form-item label="可住人数" >
                    <el-input auto-complete="off" v-model="editForm.max_people"></el-input>
                </el-form-item><el-form-item label="imgUrl" >
                    <el-input auto-complete="off" v-model="editForm.imgUrl"></el-input>
                </el-form-item><el-form-item label="price" >
                    <el-input auto-complete="off" v-model="editForm.price"></el-input>
                </el-form-item><el-form-item label="配套" >
                    <el-input auto-complete="off" v-model="editForm.device"></el-input>
                </el-form-item>
                <el-form-item label="洗手间" >
                    <el-input auto-complete="off"v-model="editForm.wc"></el-input>
                </el-form-item><el-form-item label="周边" >
                    <el-input auto-complete="off" v-model="editForm.nearby"></el-input>
                </el-form-item><el-form-item label="关于" >
                    <el-input auto-complete="off"v-model="editForm.about"></el-input>
                </el-form-item><el-form-item label="评价" >
                    <el-input auto-complete="off" v-model="editForm.review"></el-input>
                </el-form-item><el-form-item label="入住" >
                    <el-input auto-complete="off" v-model="editForm.check_in"></el-input>
                </el-form-item><el-form-item label="离开" >
                    <el-input auto-complete="off"  v-model="editForm.check_out"  ></el-input>
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
                <el-form-item label="name" >
                    <el-input auto-complete="off" v-model="addForm.room_name"></el-input>
                </el-form-item><el-form-item label="hotel_id" >
                    <el-input auto-complete="off" v-model="addForm.hotel_id"></el-input>
                </el-form-item><el-form-item label="位置" >
                    <el-input auto-complete="off" v-model="addForm.room_position"></el-input>
                </el-form-item><el-form-item label="面积" >
                    <el-input auto-complete="off" v-model="addForm.room_size"></el-input>
                </el-form-item><el-form-item label="可住人数" >
                    <el-input auto-complete="off" v-model="addForm.max_people"></el-input>
                </el-form-item><el-form-item label="imgUrl" >
                    <el-input auto-complete="off" v-model="addForm.imgUrl"></el-input>
                </el-form-item><el-form-item label="price" >
                    <el-input auto-complete="off" v-model="addForm.price"></el-input>
                </el-form-item><el-form-item label="配套" >
                    <el-input auto-complete="off" v-model="addForm.device"></el-input>
                </el-form-item>
                <el-form-item label="洗手间" >
                    <el-input auto-complete="off"v-model="addForm.wc"></el-input>
                </el-form-item><el-form-item label="周边" >
                    <el-input auto-complete="off" v-model="addForm.nearby"></el-input>
                </el-form-item><el-form-item label="关于" >
                    <el-input auto-complete="off"v-model="addForm.about"></el-input>
                </el-form-item><el-form-item label="评价" >
                    <el-input auto-complete="off" v-model="addForm.review"></el-input>
                </el-form-item><el-form-item label="入住" >
                    <el-input auto-complete="off" type="date" v-model="addForm.check_in"></el-input>
                </el-form-item><el-form-item label="离开" >
                    <el-input auto-complete="off" type="date" v-model="addForm.check_out"  ></el-input>
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
 
            this.axios.get(base+'get_allroom.php',{
                    params:{
                 }
                }).then(res =>{
                     // console.log(res.data)
                    res.data.map(function(item){
                    if(item.review ==undefined){
                        item.review =0;
                    }
                     tableData.push({
                        room_id:item.room_id,
                        room_name:item.room_name,
                        hotel_id:item.hotel_id,
                        room_position:item.room_position,
                        room_size:item.room_size,
                        room_type:item.room_type,
                        max_people:item.max_people,
                        imgUrl:item.img_url,
                        price:item.price,
                        device:item.device,
                        bedroom:item.bedroom,
                        bed:item.bed,
                        wc:item.wc,
                        nearby:item.nearby,
                        check_in:item.check_in,
                        check_out:item.check_out,
                        about:item.obout,
                        review:item.review,
                        user_id:item.user_id,
                        pinjia:item.pinjia
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
                
                let para = { room_id: row.room_id*1};
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
                            para.room_id*=1;
                            this.axios.get(base+'update_info.php',{params:para}).then((res) => {
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
                        
                        
                        para.room_id*=1;
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
<style lang="scss"  type="text/css">
  .el-table th>.cell {
    text-align: center;
}
</style>