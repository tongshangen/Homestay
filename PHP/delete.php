<?php
    //删除房源信息
	header('Access-Control-Allow-Origin:*');
	$mysql_server_name = "10.3.135.244";

	$mysql_username = "root";

	$mysql_password = "root";

	$mysql_database = "homestay";

	$room_id = isset($_GET['room_id']) ? $_GET['room_id'] :'';
    $user_id = isset($_GET['user_id']) ? $_GET['user_id'] :'';
     $hotel_id = isset($_GET['hotel_id']) ? $_GET['hotel_id'] :'';
      $order_id = isset($_GET['order_id']) ? $_GET['order_id'] :'';
	$conn=new mysqli($mysql_server_name,$mysql_username,$mysql_password,$mysql_database); 
	if($conn->connect_error){
        die('连接失败'.$conn->connect_error);
    }

     //设置编码
    $conn->set_charset('utf8'); 
    // echo $conn;
    // $sql = 'select * from orders where room_id ="$room_id"';
    $target = isset($_GET['target']) ? $_GET['target'] :'';
    if($target=='order'){
        mysqli_query($conn,"DELETE FROM orders WHERE room_id='$order_id'");
    }else if($target=="user"){
        mysqli_query($conn,"DELETE FROM user WHERE user_id='$user_id'");
    }else if($target == 'hotel'){
        mysqli_query($conn,"DELETE FROM hotel WHERE room_id='$hotel_id'");
    }else{
        mysqli_query($conn,"DELETE FROM room WHERE room_id='$room_id'");
    }
    
    $result = $conn->query($sql);
    // 使用查询结果集
    $row = $result->fetch_all(MYSQLI_ASSOC);
    
    echo json_encode($row,JSON_UNESCAPED_UNICODE);
    $conn->close();

?>