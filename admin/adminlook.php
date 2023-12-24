<?php require_once('yz.php'); ?>
<?php
include("conn.php");

$sql="select*from admin";
$result=mysqli_query($conn,$sql);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/newslook.css" />
<title>管理员列表</title>
</head>

<body>
<div id="addlook">
<p>管理员列表</p>
<table>
<tr>
<th>编号</th><th>用户名</th><th>密码</th><th>是否授权</th><th>操作</th>
</tr>
<tr>
    <?php
	  while ($rows=mysqli_fetch_array($result)){
          $id=$rows["id"];
	  ?>
<td><?php echo $rows["id"]; ?></td>
<td><?php echo $rows["username"]; ?></td>
<td>
    <?php
$password = $rows["password"];
$length = strlen($password);

if ($length <= 4) {
    // 如果密码长度不足4个字符，显示4个星号
    echo str_repeat('*', 4);
} else {
    // 如果密码长度超过4个字符，隐藏中间部分
    $visiblePart = substr($password, 0, 2) . str_repeat('*', $length - 4) . substr($password, -2);
    echo $visiblePart;
}
?>

</td>



<td>
    <?php
        $pdValue = $rows["pd"];
        $statusText = ($pdValue == 1) ? '<span style="color: red;">未授权</span>' : (($pdValue == 2) ? '已授权' : '<span style="color: red;">其他状态</span>');
        echo $statusText;
    ?>
</td>


<td><a href="modifyadmin.php?id=<?php echo $id?>">编辑</a>&nbsp;&nbsp;<a href="admindelete.php?id=<?php echo $id?>">删除</a></td>
    
</tr>
    <?php
	  }
	  ?>
</table>
</div>
</body>
</html>