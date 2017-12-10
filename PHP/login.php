<?php

    header('Access-Control-Allow-Origin:*');

    include "connect.php";  

    $username = isset($_GET["username"]) ? $_GET["username"] : '';
    $password = isset($_GET["password"]) ? $_GET["password"] : '';

    $sql = "select * from user where username='$username' and password='$password'";

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