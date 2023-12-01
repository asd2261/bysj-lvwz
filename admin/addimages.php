<?php include "conn.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/addnews.css" />
<title>添加装修效果图</title>
<script charset="utf-8" src="kindedit/kindeditor.js"></script><script>        KE.show({                id : 'editor_id'        });</script>
</head>

<body>
	<div id="addnews">
	
<p>添加装修效果图</p>
<form method="post" action="checkimages.php" enctype="multipart/form-data">
<ul>
<li>效果图标题：
  <input type="text" name="title" />
</li>
<li>装修户型(地区)：
  <select name="hx">
  <?php
  $sql="select id,classname from class where uid=13";
$result=mysqli_query($conn,$sql);
	  while($rows=mysqli_fetch_array($result)){
		?>
	<option value="<?php echo $rows["id"]?>"><?php echo $rows["classname"]; ?></option>
<?php
	  }
 ?>
  </select>
	</li>
<li>装修风格：
    <select name="fg">
      <?php
  $sql="select id,classname from class where uid=11";
$result=mysqli_query($conn,$sql);
	  while($rows=mysqli_fetch_array($result)){
		?>
	<option value="<?php echo $rows["id"]?>"><?php echo $rows["classname"]; ?></option>
<?php
	  }
 ?>
</select>
</li>
<li>装修空间(季节)：
    <select name="kj">
      <?php
  $sql="select id,classname from class where uid=12";
$result=mysqli_query($conn,$sql);
	  while($rows=mysqli_fetch_array($result)){
		?>
	<option value="<?php echo $rows["id"]?>"><?php echo $rows["classname"]; ?></option>
<?php
	  }
 ?>
</select>
  </li>
  <li>装修价格：
    <input type="text" name="jg" id="jg" />
    （万元）</li>
    <li>装修面积(时间)：
    <input name="mj" type="text" id="jg"/>（平方米）</li>
  <li>效果图：
    <input type="file" name="img" />（图片大小不大于2000*2000）
  </li>
  <li>发布日期：
    <input name="rq" type="text" id="rq" value="<?php echo date('Y-m-d')?>" size="10" maxlength="10" /></li>
<li >装修设计说明：</li>
<li class="li2"><textarea id="editor_id"  name="sjsm" >请上传同组其他效果图！</textarea></li>
<li class="li3"><input type="submit" value="提交" /></li>
</ul>
</form>
</div>
</body>
</html>