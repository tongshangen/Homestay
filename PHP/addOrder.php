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
   

    $sql = "insert into orders (nickname,user_tel,room_id,status,people,need_number,stay_time,leave_time,img_url,remark,total,user_id) values ('".$nickname."','".$user_tel."','".$room_id."','".$status."','".$people."','".$need_number."','".$stay_time."','".$leave_time."','".$img_url."','".$remark."','".$total."','".$user_id."')";
        
        $result = $conn->query($sql);

        if ($result) {
            echo "ok";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        };
    
    
    $conn->close();

?>