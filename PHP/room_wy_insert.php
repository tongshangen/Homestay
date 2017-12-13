<?php
header('Access-Control-Allow-Origin:*');

    include "DBHelper.php";
    
    $room_name = isset($_POST["room_name"]) ? $_POST["room_name"] : '';
    $room_position = isset($_POST["room_position"]) ? $_POST["room_position"] : '';
    $nearby = isset($_POST["nearby"]) ? $_POST["nearby"] : '';
    $room_size = isset($_POST["room_size"]) ? $_POST["room_size"] : '';
    $room_type = isset($_POST["room_type"]) ? $_POST["room_type"] : '';
    $max_people = isset($_POST["max_people"]) ? $_POST["max_people"] : '';
    $price = isset($_POST["price"]) ? $_POST["price"] : '';
    $device = isset($_POST["device"]) ? $_POST["device"] : '';
    $device = implode(',',$device);//数组转字符串
    $bed = isset($_POST["bed"]) ? $_POST["bed"] : '';
    $wc = isset($_POST["wc"]) ? $_POST["wc"] : '';
    $user_id = isset($_POST["user_id"]) ? $_POST["user_id"] : '';

    $sql = "insert into room(room_name,room_position,nearby,room_size,room_type,max_people,price,device,bed,wc,user_id) values('$room_name','$room_position','$nearby','$room_size','$room_type',$max_people,$price,'$device',$bed,$wc,$user_id)";

    $result = excute($sql);

    if($result){
        echo 'ok';
    }else{
        echo 'fail';
    }

?>