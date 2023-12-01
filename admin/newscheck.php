<?php
   	include("conn.php");

	$uid = $_POST["uid"];
	$title = $_POST["title"];
	$birth = $_POST["birth"];
	$rq = $_POST["rq"];
	$content = $_POST["content"];

if($content==NULL || $title==NULL || $birth==NULL || $rq==NULL){
echo"<script>alert('不能为空');location.href='addnews.php';</script>";
}
   else{
$select=mysqli_select_db($conn,"news");
$sql="insert into news(uid,title,birth,content,date) values ('{$uid}','{$title}','{$birth}','{$content}','{$rq}')";
$result=mysqli_query($conn,$sql);
                }
	          if($result){
	            echo"<script>alert('添加成功');location.href='addnews.php';</script>";
                }
                  else{
		       echo"<script>alert('添加失败');location.href='addnews.php';</script>";
                       }
             
       	
?>