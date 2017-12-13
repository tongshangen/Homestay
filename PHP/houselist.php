<?php
    header('Access-Control-Allow-Origin:*');

    include "DBHelper.php";
    $check_in = isset($_POST["check_in"]) ? $_POST["check_in"] : '';
    $check_out = isset($_POST["check_out"]) ? $_POST["check_out"] : '';
    $room_position = isset($_POST["room_position"]) ? $_POST["room_position"] : '';
    $sort = isset($_POST["sort"]) ? $_POST["sort"] : '';
    $room_type = isset($_POST["room_type"]) ? $_POST["room_type"] : '';
    $max_people = isset($_POST["max_people"]) ? $_POST["max_people"] : '';
    $bedroom = isset($_POST["bedroom"]) ? $_POST["bedroom"] : '';
    $bed = isset($_POST["bed"]) ? $_POST["bed"] : '';
    $wc = isset($_POST["wc"]) ? $_POST["wc"] : '';
    $price1 = isset($_POST["price1"]) ? $_POST["price1"] : '0';
    $price2 = isset($_POST["price2"]) ? $_POST["price2"] : '1500';
    // $price1 = (int)$price1;
    // $price2 = (int)$price2;
    $sql;
    
    if($check_in != ''|| $check_out != ''){
        $sql = "select * from  room_type,room where check_in >='$check_in' and check_out <='$check_out' and  room_type.room_type = room.room_type;";
    } else if($room_position !=''){                                 
        $sql = "select * from room_type,room WHERE room_position like '%" .$room_position. "%' and  room_type.room_type = room.room_type;";
    } else if($sort !=''){
        if($sort=='low'){
            $sql = "select * from room_type,room where room_type.room_type = room.room_type order by price asc";
        } else if ($sort=='high') {
            $sql = "select * from room_type,room where room_type.room_type = room.room_type order by price desc";
        } else if ($sort=='praise') {
            $sql = "select * from room_type,room where room_type.room_type = room.room_type order by pingjia desc";
        } else {
            $sql = "select * from room_type,room where  room_type.room_type = room.room_type;";
        }
    } else if($room_type !='' || $max_people !='' || $bedroom !='' || $bed !='' || $wc !='' ){
        if($room_type !='' && $max_people !='' && $bedroom !='' && $bed !='' && $wc !='' ){
            $sql = "select * from room_type,room WHERE  room.price between '$price1' and '$price2' and room.room_type = '$room_type' and room.max_people >= '$max_people' and room.bedroom >= '$bedroom' and room.bed >= '$bed' and room.wc >= '$wc' and   room_type.room_type = room.room_type ORDER BY  room.room_type;";
        } else if($room_type !='' && $max_people !='' && $bedroom !='' && $bed !=''){
            $sql = "select * from room_type,room WHERE  room.price between '$price1' and '$price2' and room.room_type = '$room_type' and room.max_people >= '$max_people' and room.bedroom >= '$bedroom' and room.bed >= '$bed' and  room_type.room_type = room.room_type ORDER BY  room.room_type;";
        } else if($room_type !='' && $max_people !='' && $bedroom !=''){
            $sql = "select * from room_type,room WHERE  room.price between '$price1' and '$price2' and room.room_type = '$room_type' and room.max_people >= '$max_people' and room.bedroom >= '$bedroom'  and  room_type.room_type >= room.room_type ORDER BY  room.room_type;";
        } else if($room_type !='' && $max_people !=''){

            $sql = "select * from room_type,room WHERE  room.price between '$price1' and '$price2' and room.room_type = '$room_type' and  room.max_people >= '$max_people' and  room_type.room_type >= room.room_type ORDER BY  room.room_type;";

        } else if($room_type !=''){
            $sql = "select * from room_type,room WHERE room.room_type = '$room_type' and  room_type.room_type = room.room_type";
        }
       
    } else {
        $sql = "select * from room_type,room where  room_type.room_type = room.room_type;";
    }
    
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