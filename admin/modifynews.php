<?php
include("conn.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/addnews.css" />
<title>修改新闻</title>
<script charset="utf-8" src="kindedit/kindeditor.js"></script>
<script>
	KE.show({id : 'editor_id'});
</script>
</head>

<body>

<?php
    $id=$_GET["id"];
    $sql="select * from news where id=$id";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_array($result);
    
    $sql1 = "select * from class";
    $result1 = mysqli_query($conn, $sql1);
    
    $uid = $rows['uid'];
    $sql2 = "select classname from class where id = $uid";
    $result2 = mysqli_query($conn, $sql2);
    $rows2 = mysqli_fetch_array($result2);
    $classname = $rows2['classname'];
?>
<div id="addnews">
<p>修改新闻</p>
<form method="post" action="newsxg.php?id=<?php echo $id?>">
<ul>
<li>所属分类：<select name="uid" >
 <?php
     while($rows1=mysqli_fetch_array($result1)){
         
     ?>
<option value="<?php echo $rows1['classname'];?>"<?php if ($rows1['classname'] == $classname) echo ' selected';?>><?php echo $rows1['classname'];?></option>
    <?php 
     }
    ?>
</select>
</li>
<li class="li1">新闻标题：<input type="text" name="title" value="<?php echo $rows["title"];?>"/></li>
<li>新闻来源：<input type="text" name="birth" value="<?php echo $rows["birth"];?>"/></li>
<li>发布日期：
    <input name="rq" type="text" id="rq"/ value="<?php echo $rows["date"];?>"></li>
<li >新闻内容：</li>
<li class="li2"><textarea id="editor_id"  name="content"><?php echo $rows["content"];?></textarea></li>
<li class="li3"><input type="submit" value="修改" /></li>
</ul>
    <?php
             echo $rows['uid'];
echo "<br>";

             echo $rows1['classname'];
echo "<br>";
            echo $rows1['id'];
    ?>
</form>
</div>
</body>
</html>