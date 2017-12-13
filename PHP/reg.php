<?php

    header('Access-Control-Allow-Origin:*');

    include "connect.php";  
    
    $user_tel = isset($_GET["user_tel"]) ? $_GET["user_tel"] : '';
    $password = isset($_GET["password"]) ? $_GET["password"] : '';
    $nickname = isset($_GET["nickname"]) ? $_GET["nickname"] : '';
    
    // $arrdata = json_decode($data);
    

    if($user_tel != "" && $password == ""){
        $msql = "select * from user where user_tel='$user_tel'";

        $res = $conn->query($msql);
        $row = $res->fetch_all(MYSQLI_ASSOC);


        if(count($row)>0){
            echo "false";
        } else {
            echo "true";
        };
    } else if($user_tel != "" && $password != ""){
        $sql="insert into user(user_tel,password,balance,order_id,role,nickname)values('$user_tel','$password','0','0','0','$nickname')";
        $resu=$conn->query($sql);
        if($resu){
            echo "ok";
        }else{
            echo "no";
            // echo $conn->error;
        };
    };

?>