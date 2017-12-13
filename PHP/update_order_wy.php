<?php
header('Access-Control-Allow-Origin:*');

    include "DBHelper.php";
    
    $status = isset($_POST["status"]) ? $_POST["status"] : '';
    $nickname = isset($_POST["nickname"]) ? $_POST["nickname"] : '';

    $sql = "update orders set status = $status where nickname = '$nickname'";

    $result = excute($sql);

    if($result){
        echo 'ok';
    }else{
        echo 'fail';
    }

?>