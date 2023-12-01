<!DOCTYPE html>
<?php require 'conn.php';?>
    <?php
$sql = "SELECT * FROM news WHERE id = 1 ORDER BY date DESC LIMIT 1";
	$result=mysqli_query($conn,$sql);
     $rows=mysqli_fetch_array($result);
    ?>

<html lang="en">

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
  <title>当前位置&gt;&gt;公司简介</title>
    
    <style>
  /* 设置卡片为Flexbox布局 */
.card {  
  display: flex;
  flex-direction: column;
  height: auto;
  min-height: 100%; 
}

/* 卡片内容区域自动填充卡片空间 */  
.card-body {
  flex: 1 1 auto; 
  
  /* 内容区内边距 */
  padding: 65px;  
}

/* 标题与下方内容距离 */
.card-title {
  margin-bottom: 50px; 
} 

/* 来源日期与正文内容距离 */
.card-text.text-right {
  margin-bottom: 20px;   
}

/* 正文内容与上方来源日期距离 */
.card-text.text-justify {
  margin-top: 35px;
}
        
  </style>  
    
</head>
  
    
<body>
  <?php require 'banner.php';?>
 
    
<div class="container mt-5">
    
 <div class="d-flex align-items-center">
			  <h5 title="单击 即可返回首页 ！！">
                <img src="images/zxtb.fw.png" width="28" height="25" alt="">&nbsp; &nbsp;
                <a href="index3.php" class="ml-auto" style="color: #000; text-decoration: none;"
                    onmouseover="this.style.color='red'" onmouseout="this.style.color='#000'">当前位置
                &gt;&gt;公司简介
            </a></h5>
    </div>
    
  <div class="row">

    <div class="col-md-14 mx-auto">
    
      <div class="card">
      
        <div class="card-body text-center">
        
          <h2 class="card-title">
            
            <?php 
              echo  $rows["title"];
            ?>
            
          </h2>
          
          <p class="card-text text-muted text-right" style="font-size: 15px;">
            
           来源: <?php echo $rows["birth"]; ?> &nbsp;&nbsp;日期: <?php echo date('y-m-d', strtotime($rows["date"])); ?>
            
          </p>
          
          <p class="card-text px-3  text-justify " style=" font-size: 25px; text-indent: 2em;" >
          
            <?php 
              echo  $rows["content"];
            ?>
            
          </p>
       
        </div>
        
      </div>
      
    </div>

  </div>

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