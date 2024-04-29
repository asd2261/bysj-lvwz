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


  <title>风景如画旅游网</title>
</head>

<body>
  <!--滚动banner-->
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
    
 <?php require 'footer.php';?>
    
    
</body>

</html>