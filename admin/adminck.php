<?php
session_start();
include("conn.php");
header("Content-Type:text/html;charset=utf-8");

// 从POST获取用户输入
$username = $_POST["username"];
$password = $_POST["password"];
$pd = $_POST["pd"];

if ($username != NULL && $password != NULL) {
    // 检查用户名是否已存在
    $checkQuery = "SELECT * FROM admin WHERE username = '$username'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // 用户名已存在
        echo "<script>alert('用户名已存在，请选择其他用户名！');location.href='addadmin.php';</script>";
    } else {
        // 用户名不存在，可以进行插入操作
        $insertQuery = "INSERT INTO admin (username, password, pd) VALUES ( '$username', '$password', '$pd')";
        $insertResult = mysqli_query($conn, $insertQuery);

        if ($insertResult) {
            echo "<script>alert('管理员添加成功！');location.href='addadmin.php';</script>";
        } else {
            echo "<script>alert('管理员添加失败，请重试！');location.href='addadmin.php';</script>";
        }
    }
} else {
    echo "<script>alert('用户名、密码或验证码为空，请重新输入！');location.href='addadmin.php';</script>";
}
?>
