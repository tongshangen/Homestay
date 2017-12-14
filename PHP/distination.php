<?php
	header('Access-Control-Allow-Origin:*');

	// 文件路径
	$file_url = "./data/region.json";

	// 打开文件
	$myfile = fopen($file_url, 'r');

	// 读取打开的文件
	$content = fread($myfile,filesize($file_url));

	// 用完后关闭文件
	fclose($myfile);

	// 把读取到的内容转成数组
    $arr_data = json_decode($content);
    
	// var_dump($res);
	echo json_encode($arr_data,JSON_UNESCAPED_UNICODE);

?>