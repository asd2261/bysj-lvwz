<?php 
$conn=@ mysqli_connect("localhost","root","root") or die("数据库服务器连接失败！".$mysqli_connect_error()); //创建数据库连接对象，如果数据库连接对象创建失败，抛出错误信息
$select=mysqli_select_db($conn,"zxsj");//选择要操作的数据库对象
if(!$select){
	echo "数据库连接失败！";
}
mysqli_query($conn,"set character set 'utf8'");//读库
mysqli_query($conn,"set names utf8");//写库，设置编码为utf8
date_default_timezone_set('Asia/Shanghai');
?>