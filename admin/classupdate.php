<?php require_once('yz.php'); ?>
<!doctype html>

<?php
include"conn.php";
?>

<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>

<?php
	$select=mysqli_select_db($conn,"class");
		$typeid=$_POST["class"];
		$classname=$_POST["name"];
        $id=$_GET["id"];

		$query="update class set typeid='$typeid',classname='$classname' where id=($id)";
		$result=mysqli_query($conn,$query);
		if(result){
			echo"<script>alert('成功');location.href='classlook.php';</script>";
		}
		else{
			echo"<script>alert('失败');location.href='modifyclass.php';</script>";
		}			
	?>
</body>
</html>