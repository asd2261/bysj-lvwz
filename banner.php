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
  <script src="bootstrap/js/jquery.min.js"></script>
  <!-- <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script> -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
</style>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  	 <a href="#" class="navbar-brand" >
  	 	  <img src="images/logo.png" width="30" height="30">
  	 </a>
  	 
  	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav">
  	 	 <span class="navbar-toggler-icon"></span>
  	 </button>
  	 
  	 <div class="collapse navbar-collapse" id="mynav">
  	 	  <!-- <ul class="navbar-nav">
  	 	  	 <li class="nav-item"><a href="index.php" class="nav-link">首页</a></li>
  	 	  	 <li class="nav-item"><a href="gdgsjj.php" class="nav-link">公司简介</a></li>
  	 	  	 <li class="nav-item"><a href="gdzx.php?page=1" class="nav-link">最新资讯</a></li>
  	 	  	 <li class="nav-item"><a href="gdlvlx.php?page=1" class="nav-link">旅游路线</a></li>
              <li class="nav-item"><a href="gdsjlt.php?page=1" class="nav-link">视觉旅途</a></li>
  	 	  	 <li class="nav-item"><a href="#" class="nav-link">关注我们</a></li>
  	 	  </ul> -->
  	 	  
<ul class="navbar-nav">
    <li class="nav-item"><a href="index.php" class="nav-link">首页</a></li>
    <?php 
    $result = mysqli_query($conn, "SELECT * FROM class WHERE uid=0");
    while ($arr = mysqli_fetch_array($result)) {
        ?>
        <li class="nav-item"><a href="<?php echo htmlspecialchars($arr["lj"]); ?>" class="nav-link"><?php echo htmlspecialchars($arr["classname"]); ?></a></li>
    <?php } ?>
</ul>

          
  	 	<form onsubmit="showAlert()" class="ml-auto">
        <div class="input-group">
            <input type="text" name="query" class="form-control" placeholder="请输入搜索内容">
            <div class="input-group-append">
                <button type="submit" class="btn btn-danger">搜索<i class="fa fa-search ml-1"></i></button>
            </div>
        </div>
    </form>

    <script>
        function showAlert() {
            alert("当前功能暂不可用！");
            return false; // 阻止表单提交
        }
    </script>
  	 	  
  	 </div>
  	 
  </nav>
  
 <div id="myCarousel" class="carousel slide carousel-fade w-100" data-ride="carousel" >
     <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="1000">
            <img src="images/banner-1.jpg" class="d-block w-100" alt="...">
        </div>
       <div class="carousel-item" data-interval="2000">
           <img src="images/banner-2.jpg" class="d-block w-100" alt="...">
       </div>
       <div class="carousel-item" data-interval="3000">
          <img src="images/banner-3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-interval="3000">
          <img src="images/banner-4.jpg" class="d-block w-100" alt="...">
        </div>
     </div>
     <a class="carousel-control-prev left" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     </a>
      <a class="carousel-control-next right" href="#myCarousel" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
   </div>
  
    
</body>
</html>