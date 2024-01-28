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
<style>
    .btn-group .btn {
        margin-right: 10px; /* 调整按钮之间的右侧间距 */
    }

</style>
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

<?php
include("conn.php");

/*$sql="select*from class";
$result=mysqli_query($conn,$sql);
*/
?>
                
                
     <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">添加管理员</h6>
        </div>
        <div class="card-body">
            <form method="post" action="adminck.php" >
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <label for="username">用户名：</label>
                        <input type="text" name="username" class="form-control" value=""/>
                    </li>
                    <li class="mb-3">
                        <label for="password">密码：</label>
                        <input type="password" name="password" id="password" class="form-control" value=""/>
                    </li>
                          <li class="mb-3">
    <label>是否已经授权：</label>

    <div class="btn-group" role="group" aria-label="Authorization">
        <button type="button" class="btn btn-outline-danger rounded" data-value="1">未授权</button>
        <button type="button" class="btn btn-outline-success rounded" data-value="2">已授权</button>
        <button type="button" class="btn btn-outline-warning rounded" data-value="3">其他状态</button>
        <input type="hidden" name="pd" id="pdHidden" value="">
    </div>

    <script>
        // JavaScript 代码
        document.querySelectorAll('.btn-group .btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                // 移除所有按钮的 active 类
                document.querySelectorAll('.btn-group .btn').forEach(function(btn) {
                    btn.classList.remove('active');
                });

                // 为当前按钮添加 active 类
                this.classList.add('active');

                // 获取按钮的 data-value 属性值
                var value = this.getAttribute('data-value');
                // 设置隐藏域的值
                document.getElementById('pdHidden').value = value;
            });
        });
    </script>
</li>

                   <li class="mb-3">
    <label for="text">当前时间：</label>
    <input type="text" name="date" id="date" class="form-control" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly />
</li>

                    <li style="margin-top: 10px;">
                        <input type="submit" value="添加管理" class="btn btn-primary btn-block" onclick="return validateForm()" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

<script>
function validateForm() {
    var password = document.getElementById("password").value;

    if (password.length < 6) {
        alert("密码长度不能少于6位");
        return false;
    }

    return true;
}
</script>
       
                

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
 <?php include('footer_scripts.php'); ?>

</body>

</html>