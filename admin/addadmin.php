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
<div id="addadmin">
<p>添加管理员</p>
<form method="post" action="adminck.php" onsubmit="return validateForm()">
<ul>
<li>用户名：<input type="text" name="username" /></li>
<li>密码：<input type="password" name="password" id="password" /></li>
<li>是否授权：
  <label>
    <input type="radio" name="pd" value="1" checked> 不授权
  </label>
  <label>
    <input type="radio" name="pd" value="2"> 授权
  </label>
</li>
<li><input type="submit" value=" 添加管理 " /></li>
</ul>
</form>
</div>

<script>
function validateForm() {
    var password = document.getElementById("password").value;

    if (password.length < 6) {
        alert("密码长度不能少于6位");
        return false;
    }

    return true;
}
</script>

</body>
</html>
