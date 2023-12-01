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
                    <img src="images/zstb2.fw.png" width="25" height="22" alt=""/>
                    最新资讯
                    <a href="gdzx.php?page=1" class="ml-auto" style="color: #000; text-decoration: none;" onmouseover="this.style.color='red'" onmouseout="this.style.color='#000'">更多&gt;&gt;</a>
                </h5>
                <p class="card-text" >
                    <table>
                       <tr><td height="10px"></td></tr>
        <?php
	date_default_timezone_set("PRC");  
      $sql1="select * from news where uid = 3 order BY date desc limit 9";
$result1=mysqli_query($conn,$sql1);
while ($rows1=mysqli_fetch_array($result1)){
  $timestamp = strtotime($rows1["date"]);// 把date列的值转换成Unix时间戳
 $formatted_date = date("m-d", $timestamp); // 格式化时间戳
   $title_length = mb_strlen($rows1["title"], "UTF-8"); // 获取title列的长度
  if ($title_length > 20) {   // 判断是否超过了16个字
    $short_title = mb_substr($rows1["title"], 0, 20, "UTF-8") . "...";// 截取前16个字并加上省略号
  } else {
    $short_title = $rows1["title"];// 直接显示整个字符串
  }
      ?>
      <tr class="zxzx">
          
		   <td width="20px" align="center" valign="middle">•</td>
   <td><a href="contents.php?id=<?php echo $rows1["id"]?>"style="color: #000; text-decoration: none;" onmouseover="this.style.color='red'" onmouseout="this.style.color='#000'"><?php echo  $short_title ; ?></a></td>
 <td width="60px" align="center"><?php echo $formatted_date; ?></td>
      </tr>
      <?php } ?>
                    </table>
                </p>
            </div>
        </div>
    </div>
</body>
</html>