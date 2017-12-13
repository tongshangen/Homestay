<?php
	//用于后台修改信息
	include "public.php";

	 // 接受前端数据
   	$hotel_id = isset($_GET['hotel_id']) ? $_GET['hotel_id'] :'';
   	$hotel_name = isset($_GET['hotel_name']) ? $_GET['hotel_name'] :'';
   	$hotel_tel = isset($_GET['hotel_tel']) ? $_GET['hotel_tel'] :'';
   	$hotel_about = isset($_GET['hotel_about']) ? $_GET['hotel_about'] :'';

   	$sql = "UPDATE hotel SET hotel_name='$hotel_name',hotel_tel='$hotel_tel',hotel_about='$hotel_about' WHERE hotel_id='$hotel_id'";

    

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