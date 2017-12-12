<?php
header('Access-Control-Allow-Origin:*');

    include "connect.php";
    $data = isset($_GET["data"]) ? $_GET["data"] : '';

    $arrdata = json_decode($data);

    $msql = "select * from user where username = '$arrdata->username'";

    $result = $conn->query($msql);

    $row = $result->fetch_all(MYSQLI_ASSOC);
    if(count($row)>0){
        echo "true";
    } else {
        echo "false";
    };

?>