<!doctype html>
<html>
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

<body>
      <!-- 侧边栏 -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- 侧边栏 - 品牌标识 -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="right.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">风景如画后台</div>
            </a>

            <!-- 分隔线 -->
            <hr class="sidebar-divider my-0">

            <!-- 导航项 - 仪表板 -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
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
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>导航栏分类管理</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">自定义组件:</h6>
                        <a class="collapse-item" href="buttons.html">按钮</a>
                        <a class="collapse-item" href="classlook.php">导航栏列表</a>
                    </div>
                </div>
            </li>

            <!-- 导航项 - 实用工具折叠菜单 -->
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

            <!-- 分隔线 -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- 侧边栏切换按钮 -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- 侧边栏结束 -->
</body>
</html>