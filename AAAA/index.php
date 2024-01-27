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

<body id="page-top">

    <!-- 页面包装器 -->
    <div id="wrapper">

   <!-- 侧边栏 -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- 侧边栏 - 品牌标识 -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
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
                    <span>导航栏分类管理</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">添加․查看․修改导航</h6>
                        <a class="collapse-item" href="addclass.php">添加导航分类</a>
                        <a class="collapse-item" href="classlook.php">导航分类列表</a>
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


        <!-- 内容包装器 -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- 主要内容 -->
            <div id="content">

                <!-- 顶部栏 -->
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
        <a class="dropdown-item" href="grzl.php?id=<?=$_SESSION["username"]?>">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            个人资料
        </a>
        <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            修改密码
        </a>
        <a class="dropdown-item" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            活动日志
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            退出
        </a>
    </div>
</li>


                   

               <!-- 顶部栏 -->
</nav>
<!-- 顶部栏结束 -->

<!-- 开始页面内容 -->
<div class="container-fluid">

    <!-- 页面标题 --><!-- 内容行 -->
    <div class="row">

        <!-- 收入（月度）卡片示例 -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                用户数量</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 收入（年度）卡片示例 -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                导航栏）</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                        <!-- 收入（每月）卡片示例 -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">图片数量</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">90%</div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

                        <!-- 待处理卡片 -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                新闻数量</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- 内容行 -->
                
                <div class="card shadow mb-4">
    <!-- 卡片头部 - 折叠 -->
    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
        role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary">程序说明</h6>
    </a>
    <!-- 卡片内容 - 折叠 -->
    <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
            
            <tr>
        <td height="102" valign="top" colspan="2">
            <table width="95%" height="280" border="0" align="center" cellpadding="2" cellspacing="1">
					<tr>
                      	<td height="23" width="48%">用户名：<?=$_SESSION["username"]?></td>
                      	<td width="52%">ip：<?=$_SERVER['REMOTE_ADDR']?></td>
                    </tr>
                    <tr>
                      	<td height="23" width="48%">身份过期：<?=ini_get('session.gc_maxlifetime')?></td>
                      	<td width="52%">现在时间：<?php date_default_timezone_set('prc'); echo date("y-m-d h:i:s");?></td>
                    </tr>
                    <tr>
                      	<td height="23" width="48%">服务器域名：<?=$_SERVER["HTTP_HOST"]?></td>
                      	<td width="52%">脚本解释引擎：<?=$_SERVER['SERVER_SOFTWARE']?></td>
                    </tr>
                    <tr>
                      	<td height="23">获取php运行方式：<?=php_sapi_name()?></td>
                      	<td>浏览器版本：<?php echo $_SERVER['HTTP_USER_AGENT'];?></td>
                    </tr>
                    <tr>
                      <td height="23">服务器端口：<?=$_SERVER['SERVER_PORT']?></td>
                      <td>系统类型及版本号：<?=php_uname()?></td>
                    </tr>
                   
            </table>
         </td>
     </tr>
            
        </div>
    </div>
    


</div>

                
                </div>
                <!-- /.容器-流体-->

            </div>
            <!-- 主要内容结束 -->

            <!-- 页脚 -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 风景如画2024</span>
                        
                    </div>
                </div>
            </footer>
            <!-- 页脚结束 -->

        </div>
        <!-- 内容包装结束 -->

    </div>
    <!-- 结束页包装r -->

  <!-- 滚动到顶部按钮 -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- 登出模态框 -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">确定要离开吗？</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">如果您准备结束当前会话，请选择 "退出"。</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">取消</button>
                 <a class="btn btn-primary" href="exit.php?action=exit" >退出</a>
            </div>
        </div>
    </div>
</div>


  <!-- Bootstrap核心JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- 核心插件JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- 所有页面的自定义脚本 -->
<script src="js/sb-admin-2.min.js"></script>

<!-- 页面级别插件 -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- 页面级别自定义脚本 -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>


</body>

</html>