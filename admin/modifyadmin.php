<?php require_once('yz.php'); ?>
<?php
include("conn.php");
$id=$_GET["id"];
		$sql="select * from admin where id=($id)";
		$result=mysqli_query($conn,$sql);
	    $rows=mysqli_fetch_array($result);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/addadmin.css"/>
<title>修改管理员</title>
    
     <style type="text/css">
     #password:hover {
    cursor: pointer;
  }
</style>
    <script>
  document.addEventListener("DOMContentLoaded", function () {
    var passwordInput = document.getElementById("password");

    // 鼠标移入密码框时显示密码
    passwordInput.addEventListener("mouseover", function () {
      passwordInput.type = "text";
    });

    // 鼠标移出密码框时隐藏密码
    passwordInput.addEventListener("mouseout", function () {
      passwordInput.type = "password";
    });
  });
</script>
    
</head>

<body>
<div id="modify">
<p>修改管理员</p>
<form method="post" action="adminxg.php?id=<?php echo $id?>">
<ul>
<li>用户名：<input type="text" name="username"value="<?php echo $rows["username"];?>"/></li>
<li>密码：
  <input type="password" name="password" id="password" value="<?php echo $rows["password"];?>"/></li>
<li>是否授权：
  <label>
    <input type="radio" name="pd" value="1" <?php echo ($rows["pd"] == 1) ? 'checked' : ''; ?>> 不授权
  </label>
  <label>
    <input type="radio" name="pd" value="2" <?php echo ($rows["pd"] == 2) ? 'checked' : ''; ?>> 授权
  </label>
</li>

<li><input type="submit" value="修改" /></li>
</ul>
 
</form>
</div>
</body>
</html>