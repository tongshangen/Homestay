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
    $review = isset($_GET['review']) ? $_GET['review'] :'';

    $sql = "insert into room (room_name,hotel_id,room_position,room_size,room_type,max_people,img_url,price,device,bedroom,bed,wc,nearby,check_in,check_out,about,pingjia) values ('".$room_name."','".$hotel_id."','".$room_position."','".$room_size."','".$room_type."','".$max_people."','".$img_url."','".$price."','".$device."','".$bedroom."','".$bed."','".$wc."','".$nearby."','".$check_in."','".$check_out."','".$about."','".$review."')";
        
        $result = $conn->query($sql);

        if ($result) {
            echo "ok";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        };
    
    
    $conn->close();

?>