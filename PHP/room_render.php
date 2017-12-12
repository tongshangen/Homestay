<?php
header('Access-Control-Allow-Origin:*');

    include "DBHelper.php";
  
    $user_id = isset($_POST["user_id"]) ? $_POST["user_id"] : '';
    $room_name = isset($_POST["room_name"]) ? $_POST["room_name"] : '';

    $sql = "select * from room where user_id = $user_id and room_name = '$room_name'";

    $result = query($sql);

    echo json_encode($result, JSON_UNESCAPED_UNICODE);

?>