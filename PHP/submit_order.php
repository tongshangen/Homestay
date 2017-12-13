<?php
    
	// include "public.php";
    // echo $conn;
    header('Access-Control-Allow-Origin:*');

    include "DBHelper.php";


    // 接受前端数据
    $order_id = isset($_POST['order_id']) ? $_POST['order_id'] :'11';
    $nickname = isset($_POST['nickname']) ? $_POST['nickname'] :'11';
    $user_tel = isset($_POST['user_tel']) ? $_POST['user_tel'] :'11';
    $room_id = isset($_POST['room_id']) ? $_POST['room_id'] :'11';
    $status = isset($_POST['status']) ? $_POST['status'] :'11';
    $people = isset($_POST['people']) ? $_POST['people'] :'11';
    $need_number = isset($_POST['need_number']) ? $_POST['need_number'] :'11';
    $stay_time = isset($_POST['stay_time']) ? $_POST['stay_time'] :'11';
    $leave_time = isset($_POST['leave_time']) ? $_POST['leave_time'] :'11';

    $img_url = isset($_POST['img_url']) ? $_POST['img_url'] :'11';

    // $city = isset($_POST['city']) ? $_POST['city'] :'';
    $remark = isset($_POST['remark']) ? $_POST['remark'] :'11';
    $total = isset($_POST['total']) ? $_POST['total'] :'11';
    $user_id = isset($_POST['user_id']) ? $_POST['user_id'] :'11';
     echo $order_id,$nickname,$user_tel,$room_id,$status,$people,$need_number,$stay_time,$leave_time,$img_url,$remark,$total;
    

    $sql = "insert into orders (order_id,nickname,user_tel,room_id,status,people,need_number,stay_time,leave_time,img_url,remark,total,user_id) values('$order_id','$nickname','$user_tel','$room_id','$status','$people','$need_number','$stay_time','$leave_time','$img_url','$remark','$total','$user_id')";

    // $result = excute($sql);
    // $sql = 'select * from orders where room_id ="room_3"';
    // mysqli_query($conn,"DELETE FROM room WHERE room_id='room_3'");
    // if ($conn->query($sql) === TRUE) {
    //     echo "提交订单成功";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    // $conn->close();
    $result = excute($sql);

    if($result){
        echo 'ok';
    }else{
        echo 'fail';
    }


?>