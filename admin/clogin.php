<?php
header("Content-Type:text/html;charset=utf-8");
$username=$_POST["username"];
$password=$_POST["password"];
$yzm=$_POST["yzm"];
if($username!= NULL and $password!=NULL and $yzm!=NULL){echo "登陆成功";
		 }
else{echo "登陆失败";
		}







?>