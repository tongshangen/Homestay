<?php
    header('Access-Control-Allow-Origin:*');

    include "DBHelper.php";
    // $check_in = isset($_POST["check_in"]) ? $_POST["check_in"] : '';
    // $check_out = isset($_POST["check_out"]) ? $_POST["check_out"] : '';
    // $room_position = isset($_POST["room_position"]) ? $_POST["room_position"] : '';
    // $sort = isset($_POST["sort"]) ? $_POST["sort"] : '';
    // $room_type = isset($_POST["room_type"]) ? $_POST["room_type"] : '';
    // $max_people = isset($_POST["max_people"]) ? $_POST["max_people"] : '';
    // $bedroom = isset($_POST["bedroom"]) ? $_POST["bedroom"] : '';
    // $bed = isset($_POST["bed"]) ? $_POST["bed"] : '';
    // $wc = isset($_POST["wc"]) ? $_POST["wc"] : '';
    // $price1 = isset($_POST["price1"]) ? $_POST["price1"] : 0;
    // $price2 = isset($_POST["price2"]) ? $_POST["price2"] : 1500;

    $sql;

    $sql = "SELECT * FROM room,room_type WHERE room.room_type = room_type.room_type  ORDER BY  RAND() LIMIT 4";
    $result = query($sql);

    // $res;
    // $arr=[];
    // // $result = json_decode($result);
    // for($i=0;$i<count($result);$i++){
    //     $type = $result[$i]->room_type;
    //     $sql_type = "select * from room_type,room where room_type.room_type = $type and room_type.room_type = room.room_type;";
    //     $res = query($sql_type);

    //     array_push($arr,$res[0]);
        
    // }
    // echo json_encode($arr,JSON_UNESCAPED_UNICODE);
   	echo json_encode($result, JSON_UNESCAPED_UNICODE);