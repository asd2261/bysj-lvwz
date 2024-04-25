<?php require_once('yz.php'); ?>

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
 <!-- 引入富文本 -->
<script charset="utf-8" src="kindedit/kindeditor.js"></script>
<script> KE.show({id : 'editor_id'});</script>
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
<!--！！！！！！！！！！！！！！！！！！！！！！！！！！！模板开始！！！！！！！！！！！！！！！！！！！！！！！！！！！！！-->

    <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">添加视觉旅图</h6>
        </div>
        <div class="card-body">
            <form method="post" action="checkimages.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">效果图标题：</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="form-group">
                    <label for="hx">美景所在地区：</label>
                    <select class="form-control" id="hx" name="hx" required>
                        <?php
                        $sql = "select id,classname from class where uid=13";
                        $result = mysqli_query($conn, $sql);
                        while ($rows = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $rows["id"] ?>"><?php echo $rows["classname"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fg">推荐出行方式：</label>
                    <select class="form-control" id="fg" name="fg" required>
                        <?php
                        $sql = "select id,classname from class where uid=11";
                        $result = mysqli_query($conn, $sql);
                        while ($rows = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $rows["id"] ?>"><?php echo $rows["classname"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="kj">推荐出行季节：</label>
                    <select class="form-control" id="kj" name="kj" required>
                        <?php
                        $sql = "select id,classname from class where uid=12";
                        $result = mysqli_query($conn, $sql);
                        while ($rows = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $rows["id"] ?>"><?php echo $rows["classname"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="jg">大概预算：</label>
                    <input type="text" class="form-control" id="jg" name="jg" required>
                    <small class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="mj">预计时间：</label>
                    <input type="text" class="form-control" id="mj" name="mj" required>
                    <small class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="img">美景图：</label>
                    <input type="file" class="form-control-file" id="img" name="img" required>
                    <small class="form-text text-muted">（图片大小不大于2000*2000）</small>
                </div>

                <div class="form-group">
                    <label for="rq">发布日期：</label>
                    <input type="text" class="form-control" id="rq" name="rq" value="<?php echo date('Y-m-d') ?>" required>
                </div>

                <div class="form-group">
                    <label for="sjsm">景点说明：</label>
                    <textarea id="editor_id" name="content" class="form-control" rows="10"></textarea>
</div>
                

                <div class="form-group">
                    <input type="submit" value="提交" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>


<!--！！！！！！！！！！！！！！！！！！！！！！！！！！！模板结束！！！！！！！！！！！！！！！！！！！！！！！！！！！！！-->
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