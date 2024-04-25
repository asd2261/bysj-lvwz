<?php require_once('yz.php'); ?>
<!DOCTYPE html>
<html lang="zh">

<head>

    <!-- 设置字符集 -->
    <meta charset="utf-8">
    <!-- 指定IE浏览器使用最新的渲染引擎 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 设置视口，以确保页面在各种设备上正常显示 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- 页面描述 -->
    <meta name="description" content="">
    <!-- 作者信息 -->
    <meta name="author" content="">

    <!-- 页面标题 -->
    <title>风景如画后台管理系统</title>

    <!-- 为此模板添加自定义字体 -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- 引入自定义样式 -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body >
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- 侧边栏 - 品牌标识 -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon ">
                <img src="img/logo.png" alt="Logo" style="width: 40px; height: 40px;">
                </div>
                <div class="sidebar-brand-text mx-3">风景如画后台</div>
            </a>

            <!-- 分隔线 -->
            <hr class="sidebar-divider my-0">

            <!-- 导航项 - 仪表板 -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>仪表板</span></a>
            </li>

            <!-- 分隔线 -->
            <hr class="sidebar-divider">

            <!-- 分类标题 - 界面 -->
            <div class="sidebar-heading">
                界面
            </div>

            <!-- 导航项 - 页面折叠菜单 -->
       
            <!-- 新导航项 - 示例 -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNew"
        aria-expanded="true" aria-controls="collapseNew">
        <i class="fas fa-fw fa-star"></i>
        <span>用户权限管理</span>
    </a>
    <div id="collapseNew" class="collapse" aria-labelledby="headingNew" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">添加․查看․修改管理</h6>
            <a class="collapse-item" href="addadmin.php">添加管理用户</a>
            <a class="collapse-item" href="adminlook.php">管理用户列表</a>
        </div>
    </div>
</li>

            
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>导航分类管理</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">添加․查看․修改导航</h6>
                        <a class="collapse-item" href="addclass.php">添加导航分类</a>
                        <a class="collapse-item" href="classlook.php">导航分类列表</a>
                    </div>
                </div>
            </li>


<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-fw fa-list-alt"></i>
        <span>新闻发布管理</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">添加․查看․修改新闻</h6>
            <a class="collapse-item" href="addnews.php">添加新闻内容</a>
            <a class="collapse-item" href="newslook.php">新闻内容列表</a>
        </div>
    </div>
</li>

 <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCustom"
        aria-expanded="true" aria-controls="collapseCustom">
        <i class="fas fa-fw fa-cogs"></i>
        <span>图片发布管理</span>
    </a>
    <div id="collapseCustom" class="collapse" aria-labelledby="headingCustom" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">操作․查看․修改图片</h6>
            <a class="collapse-item" href="addimages.php">添加图片内容</a>
            <a class="collapse-item" href="imglook.php">图片内容列表</a>
        </div>
    </div>
</li>


      
        <?php /*?>    <!-- 导航项 - 实用工具折叠菜单 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>实用工具</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">自定义实用工具:</h6>
                        <a class="collapse-item" href="utilities-color.html">颜色</a>
                        <a class="collapse-item" href="utilities-border.html">边框</a>
                        <a class="collapse-item" href="utilities-animation.html">动画</a>
                        <a class="collapse-item" href="utilities-other.html">其他</a>
                    </div>
                </div>
            </li>

            <!-- 分隔线 -->
            <hr class="sidebar-divider">

            <!-- 分类标题 - 附加组件 -->
            <div class="sidebar-heading">
                附加组件
            </div>

            <!-- 导航项 - 页面折叠菜单 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>页面</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">登录页面:</h6>
                        <a class="collapse-item" href="login.html">登录</a>
                        <a class="collapse-item" href="register.html">注册</a>
                        <a class="collapse-item" href="forgot-password.html">忘记密码</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">其他页面:</h6>
                        <a class="collapse-item" href="404.html">404 页面</a>
                        <a class="collapse-item" href="blank.html">空白页面</a>
                    </div>
                </div>
            </li>

            <!-- 导航项 - 图表 -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>图表</span></a>
            </li>

            <!-- 导航项 - 表格 -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>表格</span></a>
            </li>

      <?php */?>
      
            <!-- 分隔线 -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- 侧边栏切换按钮 -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>

</body>

</html>