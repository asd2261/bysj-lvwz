<?php
session_start();

include("conn.php");
header("Content-Type:text/html;charset=utf-8");

// 从POST获取用户输入
$username = $_POST["username"];
$password = $_POST["password"];


if ($username != NULL and $password != NULL) {
   
        // 检查用户名是否已存在
        $check_username_query = "SELECT * FROM admin WHERE username = '$username'";
        $check_username_result = mysqli_query($conn, $check_username_query);

        if (mysqli_num_rows($check_username_result) > 0) {
            // 用户名已存在
            echo "<script>alert('用户名已存在，请选择其他用户名！');location.href='zc.php';</script>";
        } else {
            // 用户名不存在，将用户信息插入数据库
            $insert_user_query = "INSERT INTO admin (username, password,pd,rq) VALUES ('$username', '$password','999', CURRENT_TIMESTAMP)";
            mysqli_query($conn, $insert_user_query);
            
            // 注册成功，跳转到登录界面
            echo "<script>alert('注册成功，请登录！');location.href='login.php?username={$username}';</script>";
        }
    
} else {
    echo "<script>alert('用户名、密码或验证码为空，请重新输入！');location.href='zc.php';</script>";
}
?>
