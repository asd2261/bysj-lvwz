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
	$select=mysqli_select_db($conn,"news");
		$uid=$_POST["uid"];
        $title=$_POST["title"];
        $birth=$_POST["birth"];
        $date=$_POST["rq"];
        $content=$_POST["content"];
        $id=$_GET["id"];
    
    $sql="select * from class  where classname='{$uid}'";
	$result=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_array($result);
    $classid=$rows['id'];
    
	$query="update news set uid='{$classid}',title='{$title}',birth='{$birth}',date='{$date}',content='{$content}'where id={$id}";
		$result=mysqli_query($conn,$query);
		if($result){
			echo"<script>alert('成功');location.href='newslook.php?page=1';</script>";
		}
		else{
			echo"<script>alert('失败');location.href='modifynews.php?page=1';</script>";
		}			
	?>
</body>
</html>