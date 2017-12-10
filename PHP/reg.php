<?php

    header('Access-Control-Allow-Origin:*');

    include "connect.php";  
    
    $username = isset($_GET["username"]) ? $_GET["username"] : '';
    $password = isset($_GET["password"]) ? $_GET["password"] : '';
    $nickname = isset($_GET["nickname"]) ? $_GET["nickname"] : '';

    // echo $username;
    // $arrdata = json_decode($data);
    

    if($username != "" && $password == ""){
        $msql = "select * from user where username = '$username'";

        $result = $conn->query($msql);

        $row = $result->fetch_all(MYSQLI_ASSOC);
        if(count($row)>0){
            echo "true";
        } else {
            echo "false";
        };
    } else if($username != "" && $password != ""){
        $sql="insert into user(username,password,nickname)values('$username','$password','$nickname')";
        $resu=$conn->query($sql);
        if($resu){
            echo "ok";
        }else{
            echo "no";
        };
    };

?>