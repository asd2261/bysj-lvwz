<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>top</title>
<link rel="stylesheet" type="text/css" href="css/top.css" />
</head>

<body>
	<div id="top">
<p></p>
	<div id="topright">
		<p class="p1"></p>
			 <ul>
			 	<li class="li1"><a href="addadmin.php?action" target="main"></a></li>
			 	<li class="li2"></li>
			 	<li class="li3"><a href="exit.php?action=exit" target="_top"></a></li>
			 </ul>
	</div>
</div>
<div id="end">
	<p class="p1"></p>
	<ul>
		<li class="li1"><a href="../index.php" target="_top">首页</a></li>
		<li class="li2"><a href='javascript:history.go(-1)'>后退</a></li>
		<li class="li3"><a href='javascript:history.go(1)'>前进</a></li>
		<li class="li4"><a href='javascript:history.go(0)'>刷新</a></li>
		<li class="li5">帮助</li>		
	</ul>
	<p class="p2">
		<script type="text/javascript">
		var day="";
		var month="";
		var ampm="";
		var ampmhour="";
		var myweekday="";
		var year="";
		mydate=new Date();
		myweekday=mydate.getDay();
		mymonth=mydate.getMonth()+1;
		myday= mydate.getDate();
		myyear= mydate.getYear();
		year=(myyear > 200) ? myyear : 1900 + myyear;
		if(myweekday == 0)
		weekday=" 星期日 ";
		else if(myweekday == 1)
		weekday=" 星期一 ";
		else if(myweekday == 2)
		weekday=" 星期二 ";
		else if(myweekday == 3)
		weekday=" 星期三 ";
		else if(myweekday == 4)
		weekday=" 星期四 ";
		else if(myweekday == 5)
		weekday=" 星期五 ";
		else if(myweekday == 6)
		weekday=" 星期六 ";
		document.write("<font color=white>北京时间 "+year+"年"+mymonth+"月"+myday+"日 "+weekday+"</font>");
		</script>
	</p>
</div>
<div id="down">
<p class="p0"></p>
<p class="p1"></p>
<p class="p2"> 当前登录用户：admin  用户角色：管理员</p>
<ul>
  <li class="li1"></li>
</ul>
</div>
</body>
</html>