<?php
	header('Access-Control-Allow-Origin:*');
	$mysql_server_name = "10.3.135.244";

	$mysql_username = "root";

	$mysql_password = "root";

	$mysql_database = "homestay";

	
	$conn=new mysqli($mysql_server_name,$mysql_username,$mysql_password,$mysql_database);  
	
	if($conn->connect_error){
        die('连接失败'.$conn->connect_error);
    }

     //设置编码
    $conn->set_charset('utf8'); 
    // echo $conn;

    // 接受前端数据
    // $room_id = isset($_GET['room_id']) ? $_GET['room_id'] :'';
    $hotel_id = isset($_GET['hotel_id']) ? $_GET['hotel_id'] :'';
    $hotel_tel = isset($_GET['hotel_tel']) ? $_GET['hotel_tel'] :'';
    $hotel_about = isset($_GET['hotel_about']) ? $_GET['hotel_about'] :'';

    $sql = "insert into hotel (hotel_name,hotel_tel,hotel_about) values ('".$hotel_id."','".$hotel_tel."','".$hotel_about."')";
        
        $result = $conn->query($sql);

        if ($result) {
            echo "ok";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        };
    
    
    $conn->close();

?>