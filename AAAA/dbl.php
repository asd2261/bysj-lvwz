<?php require_once('yz.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- 侧边栏切换按钮（顶部栏） -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- 顶部栏搜索 -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="搜索..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
<!-- 顶部导航栏导航 -->
<ul class="navbar-nav ml-auto">

    <!-- 导航项 - 搜索下拉框（仅在XS屏幕可见） -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- 下拉框 - 搜索 -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="搜索..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>
</ul>
<!-- 顶部导航栏结束 -->

                      <!-- 导航项 - 提示 -->
                      <!-- Nav Item - Messages -->
                      <div class="topbar-divider d-none d-sm-block"></div>
<?php
        include("conn.php");
       $username=$_SESSION["username"];
$sql = "select * from admin where username='$username'";
		$result=mysqli_query($conn,$sql);
	    $rows=mysqli_fetch_array($result);
        ?>
                        <!-- 导航项 - 用户信息 -->
<li class="nav-item dropdown no-arrow " style="list-style-type:none;">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">当前用户：<?=$_SESSION["username"]?></span>
        <img class="img-profile rounded-circle"
            src="img/undraw_profile.svg">
    </a>
    <!-- 下拉框 - 用户信息 -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="userDropdown">
        <a class="dropdown-item" href="grzl.php?username=<?= $rows["username"];?>">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            个人资料
        </a>
        <a class="dropdown-item" href="modifyadmin.php?id=<?= $rows["id"]; ?>">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            修改密码
        </a>
        <!-- <a class="dropdown-item" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            活动日志
        </a> -->
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            退出
        </a>
    </div>
</li>


                   

               <!-- 顶部栏 -->
</nav>
</body>
</html>