<?php require_once('yz.php'); ?>
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
	
   <?php
    $id=$_GET["id"];
    $sql="select * from img where id=$id";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_array($result);
    
    $sql1 = "select * from class where uid=13";
    $result1 = mysqli_query($conn, $sql1);
    
    $hx = $rows['hxid'];
    $sql2 = "select classname from class where id = $hx";
    $result2 = mysqli_query($conn, $sql2);
    $rows2 = mysqli_fetch_array($result2);
    $classname = $rows2['classname'];
        
         
    $sql4 = "select * from class where uid=11";
    $result4 = mysqli_query($conn, $sql4);
        
    $fg = $rows['fgid'];
    $sql5 = "select classname from class where id = $fg";
    $result5 = mysqli_query($conn, $sql5);
    $rows5 = mysqli_fetch_array($result5);
    $classname5 = $rows5['classname'];
        
     $sql6 = "select * from class where uid=12";
    $result6 = mysqli_query($conn, $sql6);
        
    $kj = $rows['kjid'];
    $sql7 = "select classname from class where id = $kj";
    $result7 = mysqli_query($conn, $sql7);
    $rows7 = mysqli_fetch_array($result7);
    $classname7 = $rows7['classname'];
?>     
       
<p>添加装修效果图</p>
<form method="post" action="imgxg1.php?id=<?php echo $id?>" enctype="multipart/form-data">
<ul>
<li>效果图标题：
  <input type="text" name="title" value="<?php echo $rows["title"];?>"/>
</li>
<li>装修户型：
  <select name="hx">
      
  <?php
     while($rows1=mysqli_fetch_array($result1)){
         
     ?>
<option value="<?php echo $rows1['id'];?>"<?php if ($rows1['classname'] == $classname) echo ' selected';?>><?php echo $rows1['classname'];?></option>
    <?php 
     }
    ?>
  </select>
	</li>
<li>装修风格：
    <select name="fg">
           
  <?php
     while($rows4=mysqli_fetch_array($result4)){
         
     ?>
<option value="<?php echo $rows4['id'];?>"<?php if ($rows4['classname'] == $classname5) echo ' selected';?>><?php echo $rows4['classname'];?></option>
    <?php 
     }
    ?>
</select>
</li>
<li>装修空间：
    <select name="kj">
   <?php
     while($rows6=mysqli_fetch_array($result6)){
         
     ?>
<option value="<?php echo $rows6['id'];?>"<?php if ($rows6['classname'] == $classname7) echo ' selected';?>><?php echo $rows6['classname'];?></option>
    <?php 
     }
    ?>
</select>
  </li>
  <li>装修价格：
    <input type="text" name="jg" id="jg" value="<?php echo $rows["jg"];?>" />（万元）</li>
    <li>装修面积：
    <input name="mj" type="text" id="jg" value="<?php echo $rows["mj"];?>"/>（平方米）</li>
  <li>效果图：
      <img name="tu"  src="<?php echo $rows['img'];?>" width="50" height="50">
    <input type="file" name="img" />（图片大小不大于2000*2000）
  </li>
  <li>发布日期：
    <input name="rq" type="text" id="rq" value="<?php echo $rows['date'];?>" size="10" maxlength="10" /></li>
<li >装修设计说明：</li>
<li class="li2"><textarea id="editor_id"  name="sjsm" ><?php echo $rows["sjsm"];?></textarea></li>
<li class="li3"><input type="submit" value="提交" /></li>
</ul>
</form>
</div>
</body>
</html>