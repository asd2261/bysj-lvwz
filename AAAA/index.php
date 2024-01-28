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
       <?php include('cbl.php'); ?>
        <!-- 侧边栏结束 -->


        <!-- 内容包装器 -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- 主要内容 -->
            <div id="content">

                <!-- 顶部栏 -->
                <?php include('dbl.php'); ?>
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
            <?php include('footer.php'); ?>
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
 <?php include('dck.php'); ?>

<!-- JavaScript-->
 <?php include('footer_scripts.php'); ?>

</body>

</html>