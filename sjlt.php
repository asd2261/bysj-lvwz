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
 

  
</style>
<body>
  
<div class="col-lg-12 col-md-6">
    <div class="card shadow-sm my-2 h-100">
        <div class="card-body">
            <h5 class="card-title d-flex justify-content-between align-items-center">
                <img src="images/zxtb.fw.png" width="25" height="22" alt=""/>
                视觉旅图
                <a href="gdsjlt.php?page=1" class="ml-auto" style="color: #000; text-decoration: none;" onmouseover="this.style.color='red'" onmouseout="this.style.color='#000'">更多&gt;&gt;</a>
            </h5>
            <div class="row">
                <?php
                $sql4 = "select * from img ORDER BY date DESC LIMIT 4";
                $result4 = mysqli_query($conn, $sql4);
                while ($rows4 = mysqli_fetch_assoc($result4)) {
                ?>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <a href="sjltdt.php?id=<?php echo $rows4["id"] ?>">
                            <div class="img-container">
                                <img src="AAAA/<?php echo $rows4['img']; ?>" class="img-fluid" alt="Image"style="width: 100%; height: 250px; object-fit: cover;">
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>