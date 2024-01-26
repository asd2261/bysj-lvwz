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


        <!-- 内容包装器 -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- 主要内容 -->
            <div id="content">

                <!-- 顶部栏 -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-1 static-top shadow">

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
        <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            个人资料
        </a>
        <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            设置
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


                
                
                            <?php
include("conn.php");

$sql="select*from class";
$result=mysqli_query($conn,$sql);

?>     
                
                
         <div class="container-fluid">

        <!-- 数据表格示例 -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- 数据表格标题 -->
                <h6 class="m-0 font-weight-bold text-primary">分类列表</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <!-- 数据表格 -->
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  

                            <thead>
                         <tr>
                       <th>分类编号id</th>
                      <th>分类名称name</th>
                     <th>分类级别type</th>
                     <th>父类编号uid</th>
                     <th>操作</th>
                    </tr>
                    </thead>
    <?php
	  while ($rows=mysqli_fetch_array($result)){
          $id=$rows["id"];
	  ?>
<tr>
<td><?php echo $rows["id"]; ?></td>
<td><?php echo $rows["classname"]; ?></td>
<td><?php echo $rows["typeid"]; ?></td>
<td><?php echo $rows["uid"]; ?></td>
<td><a href="modifyclass.php?id=<?php echo $id?>">编辑</a>&nbsp;&nbsp;<a href="classdelete.php?id=<?php echo $id?>">删除</a></td>
</tr>
<?php
	  }
	  ?>
</table>
                                      
                                        
                                   
                </div>
            </div>
        </div>
    </div>       
                
                
                
                
                
                
                
                
                
                
                
    

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
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- 页面级别自定义脚本 -->
<script src="js/demo/datatables-demo.js"></script>
<script>
$.fn.dataTable.defaults.oLanguage = {
    "sProcessing": "处理中...",
    "sLengthMenu": "显示 _MENU_ 项结果",
    "sZeroRecords": "没有匹配结果",
    "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
    "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
    "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
    "sInfoPostFix": "",
    "sSearch": "搜索：",
    "sUrl": "",
    "sEmptyTable": "表中数据为空",
    "sLoadingRecords": "载入中...",
    "sInfoThousands": ",",
    "oPaginate": {
        "sFirst": "首页",
        "sPrevious": "上页",
        "sNext": "下页",
        "sLast": "末页"
    },
    "oAria": {
        "sSortAscending": ": 以升序排列此列",
        "sSortDescending": ": 以降序排列此列"
    }
};
    </script>

</body>

</html>