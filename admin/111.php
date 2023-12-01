<?php
	include("conn.php");
	echo $_POST["title"];
	 echo $_POST["kj"];
	echo $_POST["hx"];
	echo $_POST["fg"];
	echo $_POST["jg"];
	echo $_POST["mj"];
	echo $_POST["sjsm"];
    echo $_POST["rq"];
    $files=$_FILES["img"];
$dir="upload/images/";//保存目录
	$name=$files["name"];//获取上传文件名
	$rand=rand(0,5000);//随机0-5000
	$name=$rand.date("YmdHis").$name;//重命名
	$path=$dir.$name;
echo $path;
?>