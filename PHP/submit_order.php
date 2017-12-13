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
    $order_id = isset($_POST['order_id']) ? $_POST['order_id'] :'';
    $nickname = isset($_POST['nickname']) ? $_POST['nickname'] :'';
    $user_tel = isset($_POST['user_tel']) ? $_POST['user_tel'] :'';
    $room_id = isset($_POST['room_id']) ? $_POST['room_id'] :'';
    $status = isset($_POST['status']) ? $_POST['status'] :'';
    $people = isset($_POST['people']) ? $_POST['people'] :'';
    $need_number = isset($_POST['need_number']) ? $_POST['need_number'] :'';
    $stay_time = isset($_POST['stay_time']) ? $_POST['stay_time'] :'';
    $leave_time = isset($_POST['leave_time']) ? $_POST['leave_time'] :'';

    $img_url = isset($_POST['img_url']) ? $_POST['img_url'] :'';

    $city = isset($_POST['city']) ? $_POST['city'] :'';
    $remark = isset($_POST['remark']) ? $_POST['remark'] :'';
    $total = isset($_POST['total']) ? $_POST['total'] :'';
    

    $sql = 'insert into orders (order_id,nickname,user_tel,room_id,status,people,need_number,stay_time,leave_time,img_url,city,remark,total) values ("$order_id","$nickname","$user_tel","8","2","2","3","1752-12-12","1987-10-10","$img_url","$city","$remark","7789")';


    // $sql = 'select * from orders where room_id ="room_3"';
    // mysqli_query($conn,"DELETE FROM room WHERE room_id='room_3'");
    if ($conn->query($sql) === TRUE) {
        echo "提交订单成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

?>