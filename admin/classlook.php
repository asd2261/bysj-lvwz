<?php require_once('yz.php'); ?>
<?php
include("conn.php");

$sql="select*from class";
$result=mysqli_query($conn,$sql);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/newslook.css" />
<title>分类列表</title>
</head>

<body>
<div id="addlook">
<p>分类列表</p>
<table>
<tr>
<th>分类编号id</th><th>分类名称name</th><th>分类级别type</th><th>父类编号uid</th><th>操作</th>
</tr>
    <?php
	  while ($rows=mysqli_fetch_array($result)){
          $id=$rows["id"];
	  ?>
<tr>
<td><?php echo $rows["id"]; ?></td>
<td><?php echo $rows["classname"]; ?></td>
<td><?php echo $rows["typeid"]; ?></td>
<td><?php echo $rows["uid"]; ?></td>
<td><a href="modifyclass.php?id=<?php echo $id?>">编辑</a>&nbsp;&nbsp;<a href="classdelete.php?id=<?php echo $id?>">删除</a></td>
</tr>
<?php
	  }
	  ?>
</table>
</div>
</body>
</html>