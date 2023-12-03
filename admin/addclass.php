<?php require_once('yz.php'); ?>
<?php
include("conn.php");
include("global.func.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/addclass.css" />
<title>添加导航分类</title>
</head>

<body>
<div id="addclass">
<p>添加导航分类(可无限分类 )</p>
<form method="post" action="classcheck.php">

<ul>
<li>所属　分类：<select name="typeid">
<option value="one">做为一级分类</option>
	 <?php
	$sql="select id,classname from class where typeid=1";
$result=mysqli_query($conn,$sql);
	  while($rows=mysqli_fetch_array($result)){
 ?>
<option value="<?php echo $rows["id"]?>"><?php echo $rows["classname"]; ?></option>
	
	<?php 
	  trees($rows["id"],1);
	  }
	?>
	</select>
</li>
<li>添加分类名：<input type="text" name="name" /></li>
<li class="li1"><input type="submit" value="添加" /></li>
</ul>
	
</form>
</div>
</body>
</html>
