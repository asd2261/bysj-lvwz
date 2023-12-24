<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>XXX后台管理系统</title>
<style type="text/css">
body {
	background-color: #0D1D3E;
}
</style>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="login_area">
  <div id="login_box">
    <div id="login_title">
     XXX后台管理系统
     </div>
     <p>&nbsp;</p>
    <div id="login_form">
       <form name="form1" method="post" action="checklogin.php">
        <table width="380" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="81" height="60" valign="middle" class="text">用 户 名：</td>
      <td valign="middle">
        <input type="text" name="username" id="username" class="inputbox"></td>
    </tr>
    <tr>
      <td width="81" height="60" valign="middle" class="text">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
      <td valign="middle"><input type="password" name="password" id="pwd" class="inputbox"></td>
    </tr>
    <tr>
      <td width="81" height="60" valign="middle" class="text">验 证 码：</td>
      <td valign="middle" ><input type="text" name="yzm" id="yzm" class="inputbox"></td>
	  <td><a href="javascript:void(0)"
            onClick="document.getElementById('code').src='yzm.php?id='+Math.random()" style="display:block;float:left;height:28px;" title="点击更换验证码！"><img  id="code" src="yzm.php" border="0" width="100" height="35" style="margin-left:5px;" /></a></td>
    </tr>
    <tr>
      <td height="60" colspan="2" align="center" valign="middle">
		  <input type="submit" class="login_btn" id="login_sub"  value="登  录">
			<input type="reset" class="login_btn" id="login_ret" value="重 置">
			 <input type="reset" onclick="location.href=('zc.php')" class="login_btn" id="login_ret" value="注 册">
		</td>
      </tr>
  </tbody>
</table>
  
      </form>
     </div>
  </div></div>
</body>
</html>
