<?php require_once('yz.php'); ?>
<?php
include("conn.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/newslook.css" />
<title>新闻列表</title>

</head>


<body>
<div id="addlook">
<p>信息列表</p>
<table>
<tr>
<th>编号</th><th>新闻分类</th><th>新闻标题</th><th>新闻来源</th><th>发布时间</th><th>操作</th>
</tr>
 <?php
    
                          $pagenums=10;
						  $page=$_GET["page"];
						  $pagestart=($page-1)*$pagenums;
					      $_sql="select * from news";
					      $_result=mysqli_query($conn,$_sql);
					      $nums=mysqli_num_rows($_result);
						  $pages=ceil($nums/$pagenums);
						  $sql3="select * from news  order by id asc limit $pagestart,$pagenums";
						  $result3=mysqli_query($conn,$sql3);
						  while($rows3=mysqli_fetch_array($result3)){
	 ?>
<tr>
	<td><?php echo $rows3["id"]?></td>
	<?php
		 $uid=$rows3['uid'];
	$sql1="select  classname from class where id=$uid";
		$result1=mysqli_query($conn,$sql1);
		$rows1=mysqli_fetch_array($result1);
		 ?>
	<td><?php echo $rows1["classname"]?></td>
	<td><?php echo $rows3["title"]?></td>
	<td><?php echo $rows3["birth"]?></td>
	<td><?php echo $rows3["date"]?></td>
<td><a href="modifynews.php?id=<?php echo $rows3['id'] ?>">编辑</a>&nbsp;&nbsp;<a href="newsdelete.php?id=<?php echo $rows3['id'] ?>">删除</a></td>
</tr>
<?php
	  }
	  ?>

</table>
    
    <table width="300" height="15" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td height="35">第<?php echo $page ?>页/共<?php echo $pages ?>页</td>
      <td>共<?php echo $nums ?>条资讯</td>
      <?php
      if ($page == 1) {
      ?>
        <td>首页</td>
        <td>上一页</td>
      <?php } else { ?>
        <td><a href="newslook.php?page=1">首页</a></td>
        <td><a href="newslook.php?page=<?php echo $page - 1; ?>">上一页</a></td>
      <?php } ?>

      <?php
      if ($page == $pages) { ?>
        <td>下一页</td>
        <td>尾页</td>
      <?php } else { ?>
        <td><a href="newslook.php?page=<?php echo $page + 1; ?>">下一页</a></td>
        <td><a href="newslook.php?page=<?php echo $pages; ?>">尾页</a></td>
      <?php } ?>
    </tr>
  </tbody>
</table>
    
</body>
</html>