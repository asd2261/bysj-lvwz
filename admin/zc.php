<!doctype html>
<?php
$username = $_GET["username"];
$password = $_GET["password"];
?>
<html>
<head>
<meta charset="utf-8">
<title>风景如画后台注册系统</title>
<style type="text/css">
body {
    background-color: #0D1D3E;
}
</style>
         <style type="text/css">
     #pwd:hover {
    cursor: pointer;
  }
</style>
    <script>
  document.addEventListener("DOMContentLoaded", function () {
    var passwordInput = document.getElementById("pwd");

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
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="login_area">
  <div id="login_box">
    <div id="login_title">
     🚧注册系统🚧
     </div>
     <p>&nbsp;</p>
    <div id="login_form">
       <form name="form1" method="post" action="checkzx.php" onsubmit="return validateForm()" onreset="resetForm()">
        <table width="380" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="81" height="60" valign="middle" class="text">用 户 名：</td>
      <td valign="middle">
        <input type="text" name="username" id="username" class="inputbox" value="<?php echo $username?>"></td>
    </tr>
    <tr>
      <td width="81" height="60" valign="middle"  id="pwd" class="text">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
      <td valign="middle"><input type="password" name="password" id="pwd" class="inputbox" value="<?php echo $password?>"></td>
    </tr>
    <tr>
      <td width="81" height="60" valign="middle" class="text">验 证 码：</td>
      <td valign="middle" ><input type="text" name="yzm" id="yzm" class="inputbox"></td>
      <td><a href="javascript:void(0)"
            onClick="document.getElementById('code').src='yzm.php?id='+Math.random()" style="display:block;float:left;height:28px;" title="点击更换验证码！"><img  id="code" src="yzm.php" border="0" width="100" height="35" style="margin-left:5px;" /></a></td>
    </tr>
    <tr>
      <td height="60" colspan="2" align="center" valign="middle">
          <input type="submit" class="login_btn" id="login_sub"  value="注册">
            <input type="reset" class="login_btn" id="login_reset" value="重 置">
        </td>
      </tr>
  </tbody>
</table>
  <script>
   function resetForm() {
        // 弹窗询问用户是否确认重置
        var isConfirmed = confirm("是否确认重置表单？");
        if (isConfirmed) {
            // 用户点击确定，重置表单
            document.forms['form1'].reset();
        }
    }

    function validateForm() {
        var password = document.getElementById('pwd').value;

        if (password.length < 6) {
            alert('密码必须大于6位！');
            return false;
        }

        return true;
    }
</script>
           
      </form>
     </div>
  </div></div>
</body>
</html>
