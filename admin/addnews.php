<?php 
include("conn.php");
?>
<?php require_once('yz.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/addnews.css" />
<script charset="utf-8" src="kindedit/kindeditor.js"></script>
<script> KE.show({id : 'editor_id'});</script>
<title>添加新闻</title>
</head>
<body>
<div id="addnews">
<p>添加信息</p>
<form method="post" action="newscheck.php">
<ul>
<li>所属分类：<select name="uid">
	 <?php
	$sql="select id,classname from class where typeid=1";
$result=mysqli_query($conn,$sql);
	  while($rows=mysqli_fetch_array($result)){
 ?>
<option value="<?php echo $rows["id"]?>"><?php echo $rows["classname"]; ?></option>

	 <?php
	$sql1="select id,classname from class where uid={$rows["id"]}";
$result1=mysqli_query($conn,$sql1);
	  while($rows1=mysqli_fetch_array($result1)){
 ?>
<option value="<?php echo $rows1["id"]?>"><?php echo str_repeat('&nbsp;&nbsp;&nbsp;',1)."|-".$rows1["classname"]; ?></option>

	<?php 
	  }
	  }
	?>
    
    
</select>
    
</li>
<li class="li1">新闻标题：<input type="text" name="title" /></li>
<li>新闻来源：<input type="text" name="birth" /></li>
<li>发布日期：
    <input name="rq" type="text" id="rq" size="10" maxlength="10" value="<?php echo date('Y-m-d-h-i')?>" /></li>
<li >新闻内容：</li>
<li class="li2"><textarea id="editor_id"  name="content" value="请填写信息内容！" ></textarea></li>
<li class="li3"><input type="submit" value="提交" /></li>
</ul>
</form>
</div>
</body>
</html>