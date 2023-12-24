<?php
require_once'yz.php';
?>
<!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>风景如画旅游网管理系统后台</title>
<style type="text/css">
.welcome{min-height:100px;height:auto;font-size:13px;}
.welcome .title{height:30px;line-height:30px;font-weight:bold;}
.welcome .tip{height:25px;line-height:25px;background:url(images/ts.gif) 10px center no-repeat;padding-left:40px;}
.welcome .content{line-height:23px;padding-left:50px;}
.explain{border:1px solid #EBEBEB;font-size:13px;}
.explain table td{border-bottom:1px dotted #ECECEC;font-size:12px;}
</style>
</head>
<body>
<div class="welcome">
   <div class="title">风景如画旅游网管理系统后台系统</div>
   <div class="tip">提示：</div>
   <div class="content">欢迎您登录。</div>
</div>
<table class="explain" cellspacing="0" cellpadding="0" width="100%" height="205">
	<tr>
        <td class="left_bt2" height="27" background="images/news-title-bg.gif" width="31%">&nbsp;&nbsp;&nbsp;程序说明</td>
        <td class="left_bt2" background="images/news-title-bg.gif"width="69%"></td>
    </tr>
    <tr>
        <td height="102" valign="top" colspan="2">
            <table width="95%" height="153" border="0" align="center" cellpadding="2" cellspacing="1">
					<tr>
                      	<td height="23" width="48%">用户名：<?=$_SESSION["username"]?></td>
                      	<td width="52%">ip：<?=$_SERVER['REMOTE_ADDR']?></td>
                    </tr>
                    <tr>
                      	<td height="23" width="48%">身份过期：<?=ini_get('session.gc_maxlifetime')?></td>
                      	<td width="52%">现在时间：<?php date_default_timezone_set('prc'); echo date("y-m-d h:i:s");?></td>
                    </tr>
                    <tr>
                      	<td height="23" width="48%">服务器域名：<?=$_SERVER["HTTP_HOST"]?></td>
                      	<td width="52%">脚本解释引擎：<?=$_SERVER['SERVER_SOFTWARE']?></td>
                    </tr>
                    <tr>
                      	<td height="23">获取php运行方式：<?=php_sapi_name()?></td>
                      	<td>浏览器版本：<?php echo $_SERVER['HTTP_USER_AGENT'];?></td>
                    </tr>
                    <tr>
                      <td height="23">服务器端口：<?=$_SERVER['SERVER_PORT']?></td>
                      <td>系统类型及版本号：<?=php_uname()?></td>
                    </tr>
            </table>
         </td>
     </tr>
     <tr>
     	<td height="5" colspan="2">&nbsp;</td>
     </tr>
</table>
</body>
</html>
