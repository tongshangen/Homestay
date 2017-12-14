<?php
	//用于后台修改信息
	include "public.php";

	 // 接受前端数据
   	$room_id = isset($_GET['room_id']) ? $_GET['room_id'] :'';
   	$room_name = isset($_GET['room_name']) ? $_GET['room_name'] :'';
   	$hotel_id = isset($_GET['hotel_id']) ? $_GET['hotel_id'] :'';
   	$room_position = isset($_GET['room_position']) ? $_GET['room_position'] :'';
   	$room_size = isset($_GET['room_size']) ? $_GET['room_size'] :'';
   	$room_type = isset($_GET['room_type']) ? $_GET['room_type'] :'';
   	$max_people = isset($_GET['max_people']) ? $_GET['max_people'] :'';
   	$img_url = isset($_GET['img_url']) ? $_GET['img_url'] :'';
   	$price = isset($_GET['price']) ? $_GET['price'] :'';
   	$device = isset($_GET['device']) ? $_GET['device'] :'';
   	$bedroom = isset($_GET['bedroom']) ? $_GET['bedroom'] :'';
   	$bed = isset($_GET['bed']) ? $_GET['bed'] :'';
   	$wc = isset($_GET['wc']) ? $_GET['wc'] :'';
   	$nearby = isset($_GET['nearby']) ? $_GET['nearby'] :'';
   	$check_in = isset($_GET['check_in']) ? $_GET['check_in'] :'';
   	$check_out = isset($_GET['check_out']) ? $_GET['check_out'] :'';
   	$about = isset($_GET['about']) ? $_GET['about'] :'';
   	$user_id = isset($_GET['user_id']) ? $_GET['user_id'] :'';
   	$pingjia = isset($_GET['review']) ? $_GET['review'] :'';

   	$sql = "UPDATE room SET room_name='$room_name',hotel_id='$hotel_id',room_position='$room_position',room_size='$room_size',room_type='$room_type',max_people='$max_people',img_url='$img_url',price='$price',device='$device',bedroom='$bedroom',bed='$bed',wc='$wc',nearby='$nearby',check_in='$check_in',check_out='$check_out',about='$about',user_id='$user_id',pingjia='$pingjia' WHERE room_id='$room_id'";

    

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