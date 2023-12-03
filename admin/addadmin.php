<?php require_once('yz.php'); ?>
<?php
include("conn.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/addadmin.css"/>
<title>添加管理员</title>
</head>

<body>
<div id="addadmin">
<p>添加管理员</p>
<form method="post" action="">
<ul>
<li>账号：<input type="text" name="admin" /></li>
<li>密码：<input type="password" name="password" /></li>
<li>姓名：<input type="text" name="xm" /></li>
<li>年龄：<input type="text" name="nl" /></li>
<li><input type="submit" value="添加" /></li>
</ul>
</form>
</div>
</body>
</html>