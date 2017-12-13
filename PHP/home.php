<?php
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
    // echo $conn;
    $sql = 'select * from orders where order_id ="846513889555"';
    mysqli_query($conn,"UPDATE orders SET status=1 WHERE order_id=846513889555");
    $result = $conn->query($sql);
    // 使用查询结果集
    $row = $result->fetch_all(MYSQLI_ASSOC);
    
    echo json_encode($row,JSON_UNESCAPED_UNICODE);
    $conn->close();

?>
