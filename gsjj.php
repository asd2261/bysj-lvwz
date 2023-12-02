<!doctype html>
<?php require 'conn.php';?>
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
 

  
</style>
<body>
     <div class="col-lg-4 col-md-6">
        <div class="card shadow-sm my-2 h-100">
            <div class="card-body">
                <h5 class="card-title d-flex justify-content-between align-items-center">
                    <img src="images/zxtb.fw.png" width="25" height="22" alt=""/>
                    公司简介
                    <a href="gdgsjj.php?page=1" class="ml-auto" style="color: #000; text-decoration: none;" onmouseover="this.style.color='red'" onmouseout="this.style.color='#000'">更多&gt;&gt;</a>
                </h5>
                <p class="card-text">
                    <?php
                    $sql2 = "select content from news";
                    $result2 = mysqli_query($conn, $sql2);
                    $rows2 = mysqli_fetch_array($result2);
                    echo mb_substr($rows2['content'], 0, 250, 'utf-8') . '...';
                    ?>
                    
                </p>
            </div>
        </div>
    </div>
</body>
</html>