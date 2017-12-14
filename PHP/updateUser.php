<?php
    //用于后台修改信息
    include "public.php";

     // 接受前端数据
      $order_id = isset($_GET['order_id']) ? $_GET['order_id'] :'';
    $nickname = isset($_GET['nickname']) ? $_GET['nickname'] :'';
    $user_tel = isset($_GET['user_tel']) ? $_GET['user_tel'] :'';
    $password = isset($_GET['password']) ? $_GET['password'] :'';
    $role = isset($_GET['role']) ? $_GET['role'] :'';
  
    $user_id = isset($_GET['user_id']) ? $_GET['user_id'] :'';
   

    $sql = "UPDATE user SET order_id='$order_id',nickname='$nickname',user_tel='$user_tel',password='$password',role='$role',user_id='$user_id'";

    

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