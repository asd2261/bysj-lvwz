<!doctype html>
<html>
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
<body>
    
    
         <div class="col-sm-4">
        <div class="card shadow-sm my-2 h-100">
            <div class="card-body">
                <h5 class="card-title d-flex justify-content-between align-items-center">
                    <img src="images/zxtb.fw.png" width="25" height="22" alt=""/>
                    旅游路线
                    <a href="gdlvlx.php?page=1" class="ml-auto" style="color: #000; text-decoration: none;" onmouseover="this.style.color='red'" onmouseout="this.style.color='#000'">更多&gt;&gt;</a>
                </h5>
                <p class="card-text">
                          <tr>
			        <td height="260" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			          <?php 

                 $sql3="select * from news where uid = 4 order BY date desc limit 3";
                 $result3=mysqli_query($conn,$sql3);
                  while ($rows3=mysqli_fetch_array($result3)){
                      $timestamp = strtotime($rows3["date"]);// 把date列的值转换成Unix时间戳
                      $formatted_date1 = date("d", $timestamp);
                       $formatted_date2 = date("m-d", $timestamp);
						?>
			            <tr>
			              <td width="98" height="80">
							  <table width="100%" border="0" cellspacing="0" cellpadding="0">
			                  <tr>
			                    <td height="40" align="center" style="font-size: 20px"><?php echo $formatted_date1;?></td>
			                    </tr>
			                  <tr>
			                    <td align="center" height="40" style="background-color:#8ADEF1; font-size: 14px; color: black;"><?php echo $formatted_date2;?></td>
			                    </tr>
			                </table>
								
						  </td>
			              <td width="352"><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="gdxzschak.php?id=<?php echo $rows3["id"]?>" style="color: #000; text-decoration: none;" onmouseover="this.style.color='red'" onmouseout="this.style.color='#000'"><?php echo $rows3["title"];?></a></td>
		                </tr>
			            <?php }?>
			          </table>
		          </tr>
                </p>
            </div>
        </div>
    </div>
    
    
</body>
</html>