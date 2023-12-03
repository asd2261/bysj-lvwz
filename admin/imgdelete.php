<?php require_once('yz.php'); ?>
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
		$select=mysqli_select_db($conn,"img");
$id=$_GET["id"];
	$sql="delete from img where id={$id}";
	mysqli_query($conn,$sql);
echo"<script>alert('删除成功，请返回');location.href='imglook.php?page=1';</script>";
	?>


</body>
</html>