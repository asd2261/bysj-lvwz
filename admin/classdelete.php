<?php
include("conn.php");
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>

<?php
		$select=mysqli_select_db($conn,"class");
$id=$_GET["id"];
	
$sql="select id from class where id={$id}";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);
	
$sql1="select id from news where uid={$rows["id"]}";
$result1=mysqli_query($conn,$sql1);
$rows1=mysqli_fetch_array($result1);

	if($rows1["id"]==NULL){
	$sql="delete from class where id={$id}";
	mysqli_query($conn,$sql);
echo"<script>alert('删除成功，请返回');location.href='classlook.php';</script>";
	
}
else{
echo"<script>alert('删除失败导航栏有内容，请返回');location.href='classlook.php';</script>";

}
	
?>
</body>
</html>