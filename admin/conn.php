<?php
$conn=mysqli_connect("localhost","root","root") or die("连接数据库服务器失败！");
$select=mysqli_select_db($conn,"zxsj") or die("连接数据库失败！");
mysqli_query($conn,"set names utf8") or die("query字符集错误！");
date_default_timezone_set('Asia/Shanghai');
?>