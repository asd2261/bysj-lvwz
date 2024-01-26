<!DOCTYPE html>
<html lang="en">
<?php
// 从 GET 请求中获取用户名和密码
$username = isset($_GET["username"]) ? $_GET["username"] : "";
?>
<head>

    <!-- 设置文档字符集为UTF-8 -->
    <meta charset="utf-8">
    <!-- 设置IE浏览器的兼容性 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 设置视口宽度等于设备宽度，初始缩放为1，禁止缩放 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- 页面描述 -->
    <meta name="description" content="">
    <!-- 页面作者 -->
    <meta name="author" content="">

    <!-- 页面标题 -->
    <title>风景如画 - 登录</title>

    <!-- 引入FontAwesome图标的样式表 -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- 引入Google字体 -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- 引入自定义样式表 -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- 外部行 -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- 在卡片主体内部的嵌套行 -->
                        <div class="row">
                            <!-- 左侧背景图 -->
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <!-- 右侧登录表单 -->
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <!-- 页面标题 -->
                                        <h1 class="h4 text-gray-900 mb-4">欢迎回来！</h1>
                                    </div>
                                    <!-- 登录表单 -->
                                    <form class="user" method="post" action="checklogin.php">
                                        <div class="form-group">
    <!-- 邮箱输入框 -->
    <input type="text" name="username" class="form-control form-control-user"
           id="exampleInputEmail" aria-describedby="emailHelp"
           placeholder="输入邮箱地址..." value="<?php echo htmlspecialchars($username); ?>">
</div>
<div class="form-group">
    <!-- 密码输入框 -->
    <input type="password" name="password" class="form-control form-control-user"
           id="exampleInputPassword" placeholder="密码" value="<?php echo htmlspecialchars($password); ?>">
</div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <!-- "记住我" 复选框 -->
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">记住我</label>
                                            </div>
                                        </div>
                                        <!-- 登录按钮 -->
                                          <input type="submit" class="btn btn-primary btn-user btn-block" id="login_sub"  value="登  录">
                                       
                                        <hr>
                                       
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <!-- 忘记密码链接 -->
                                        <a class="small" href="forgot-password.html">忘记密码？</a>
                                    </div>
                                    <div class="text-center">
                                        <!-- 创建新账号链接 -->
                                        <a class="small" href="register.html">创建新账号！</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- 引入jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- 引入Bootstrap的JS库 -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- 引入jQuery Easing插件 -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- 引入自定义脚本 -->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
