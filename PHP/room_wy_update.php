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
    $device = isset($_POST["device"]) ? $_POST["device"] : [];
    // $device = implode(',',$device);//数组转字符串
    $bed = isset($_POST["bed"]) ? $_POST["bed"] : '';
    $wc = isset($_POST["wc"]) ? $_POST["wc"] : '';

    $sql = "update room set room_position = '$room_position',nearby = '$nearby',room_size = '$room_size',room_type = '$room_type',max_people = $max_people,price = $price,device = '$device',bed = $bed,wc = $wc where room_name = '$room_name'";

    $result = excute($sql);

    if($result){
        echo 'ok';
    }else{
        echo 'fail';
    }

?>