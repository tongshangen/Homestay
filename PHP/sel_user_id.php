<?php
header('Access-Control-Allow-Origin:*');

    include "DBHelper.php";
  
    $user_tel = isset($_POST["user_tel"]) ? $_POST["user_tel"] : '';

    $sql = "select user_id from user where user_tel =  '$user_tel'";

    $result = query($sql);

    echo json_encode($result, JSON_UNESCAPED_UNICODE);

?>