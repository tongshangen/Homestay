<?php
header('Access-Control-Allow-Origin:*');

    include "DBHelper.php";
    
    $room_name = isset($_POST["room_name"]) ? $_POST["room_name"] : '';

    $sql = "delete from room where room_name = '$room_name'";

    $result = excute($sql);

    if($result){
        echo 'ok';
    }else{
        echo 'fail';
    }

?>