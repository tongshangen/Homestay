<?php
header('Access-Control-Allow-Origin:*');

    include "DBHelper.php";
  
    $user_id = isset($_POST["user_id"]) ? $_POST["user_id"] : '';

    $sql = "select * from room where user_id = $user_id";

    $result = query($sql);

    echo json_encode($result, JSON_UNESCAPED_UNICODE);

?>