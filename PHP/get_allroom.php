<?php
<<<<<<< HEAD
	//用于取出所有的房源信息
	header('Access-Control-Allow-Origin:*');
	$mysql_server_name = "10.3.135.244";

	$mysql_username = "root";

	$mysql_password = "root";

	$mysql_database = "homestay";

	
	$conn=new mysqli($mysql_server_name,$mysql_username,$mysql_password,$mysql_database);  
	

	if($conn->connect_error){
        die('连接失败'.$conn->connect_error);
    }

     //设置编码
    $conn->set_charset('utf8'); 

    $target = isset($_GET['target']) ? $_GET['target'] :'';
=======
	header('Access-Control-Allow-Origin:*');
	//用于取出所有的房源信息
	include "public.php";
>>>>>>> cts
    //设置分页
    // $qty=isset($_GET['qty'])? $_GET['qty']:0;
	// var_dump($conn);


	//全表查询
<<<<<<< HEAD
   if($target =="user"){
    $sql = 'select * from user';
   }else{
    $sql = 'select * from room';
   }
	
=======
	$sql = 'select * from room';
>>>>>>> cts

	//单条查询
	// $sql = 'select * from hotel where hotel_id ="0009"';


	$result = $conn->query($sql);
    // 使用查询结果集
    $row = $result->fetch_all(MYSQLI_ASSOC);
    
    echo json_encode($row,JSON_UNESCAPED_UNICODE);
	// $row = mysql_fetch_row($result);

	$conn->close();

?>