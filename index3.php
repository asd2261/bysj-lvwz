<!DOCTYPE html>
<html lang="en">
<?php require 'conn.php';?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- 引入bootstrap 样式文件 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- 引入字体图标样式 -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- 引入我们自己的首页样式文件 -->
  <link rel="stylesheet" href="css/style.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <!-- <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script> -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <title>旅游网</title>
</head>

<body>
  
 <?php require 'banner.php';?>
    
 <table width="1400" border="0" cellspacing="0" cellpadding="0">
		  <tbody>
		    <tr>
		      <td height="60">&nbsp;</td>
	        </tr>
	      </tbody>
	    </table>
    
    
    
   <div class="row mx-2">
     <?php require 'gsjj.php';?>
       <?php require 'zxzx.php';?>
<?php require 'lvlx.php';?>
       <?php require 'sjlt.php';?>

    </div>

     <table width="1400" border="0" cellspacing="0" cellpadding="0">
		  <tbody>
		    <tr>
		      <td height="60">&nbsp;</td>
	        </tr>
	      </tbody>
	    </table>
    

    <footer class="bg-dark text-white text-center py-4">
	<h3>哈哈哈哈哈</h3>
	<ul class="list-inline">
		<li class="list-inline-item"><i class=" fa fa-safari fa-2x"></i></li>
				<li class="list-inline-item"><i class=" fa fa-google fa-2x"></i></li>
						<li class="list-inline-item"><i class=" fa fa-android fa-2x"></i></li>
	</ul>
	<p>企业培训 | 合作事宜 | 版权投诉</p>
	<p>冀ICP 备12345678. © 2019-2025 chaoliuchuanda. Powered by chaopai.</p>
</footer>
    
</body>

</html>