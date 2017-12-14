<?php

    header('Access-Control-Allow-Origin:*');

    include "connect.php";  

    $user_tel = isset($_GET["user_tel"]) ? $_GET["user_tel"] : '';
    $password = isset($_GET["password"]) ? $_GET["password"] : '';

    // echo $user_tel;

    $sql = "select * from user where user_tel='$user_tel' and password='$password'";

    $result = $conn->query($sql);

    $row = $result->fetch_all(MYSQLI_ASSOC);

    // echo count($row);
    // echo json_encode($row, JSON_UNESCAPED_UNICODE);

    if(count($row)>0){
            echo "true";
        } else {
            echo "false";
        };
?>