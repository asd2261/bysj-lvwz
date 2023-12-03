<?php require_once('yz.php'); ?>
<?php
include("conn.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/addclass.css" />
<title>修改导航分类</title>
</head>

<body>
<?php
	$id=$_GET["id"];
		$sql="select * from class where id=($id)";
		$result=mysqli_query($conn,$sql);
	    $rows=mysqli_fetch_array($result);
    
        $uid=$rows["uid"];
		$sql1="select * from class where id=($uid)";
		$result1=mysqli_query($conn,$sql1);
	    $rows1=mysqli_fetch_array($result1);

    ?>
<div id="modify">
<p>修改导航分类</p>
<form method="post" action="classxg.php?id=<?php echo $id?>">
<ul>
<?php
    if($uid==0){ 
    ?>
<li>所属　分类：
<input name="class" type="text" id="id" value="一级分类">
</li>
<?php
    }
  else{?>
    <li>所属　分类：
<input name="class" type="text" id="id" value="<?php echo $rows1["classname"];?>">
</li>
    <?php
    }
    ?>
<li>修改分类名：<input type="text" name="name" value="<?php echo $rows["classname"];?>"></li>
<li><input type="submit" value="修改" /></li>
</ul>
</form>
</div>
</body>
</html>