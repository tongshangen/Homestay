<?php
    //用于后台修改信息
    include "public.php";

     // 接受前端数据
      $order_id = isset($_GET['order_id']) ? $_GET['order_id'] :'';
    $nickname = isset($_GET['nickname']) ? $_GET['nickname'] :'';
    $user_tel = isset($_GET['user_tel']) ? $_GET['user_tel'] :'';
    $room_id = isset($_GET['room_id']) ? $_GET['room_id'] :'';
    $status = isset($_GET['status']) ? $_GET['status'] :'';
    $people = isset($_GET['people']) ? $_GET['people'] :'';
    $need_number = isset($_GET['need_number']) ? $_GET['need_number'] :'';

    $stay_time = isset($_GET['stay_time']) ? $_GET['stay_time'] :'';

    $leave_time = isset($_GET['leave_time']) ? $_GET['leave_time'] :'';
    $img_url = isset($_GET['img_url']) ? $_GET['img_url'] :'';
    $remark = isset($_GET['remark']) ? $_GET['remark'] :'';
    $total = isset($_GET['total']) ? $_GET['total'] :'';
    $user_id = isset($_GET['user_id']) ? $_GET['user_id'] :'';
   

    $sql = "UPDATE room SET order_id='$order_id',nickname='$nickname',user_tel='$user_tel',room_id='$room_id',status='$status',people='$people',img_url='$img_url',need_number='$need_number',stay_time='$stay_time',leave_time='$leave_time',remark='$remark',total='$total',nearby='$nearby',check_in='$check_in',check_out='$check_out',about='$about',user_id='$user_id'";

    

    $result = $conn->query($sql);

    // 使用查询结果集
  $row = $result->fetch_assoc();
  
  //释放查询结果集
    $result->close();

    //把结果输出到前台
    echo json_encode($row,JSON_UNESCAPED_UNICODE);

     // // 释放查询内存(销毁)
    $result->free();

    //关闭连接
    $conn->close();

?>