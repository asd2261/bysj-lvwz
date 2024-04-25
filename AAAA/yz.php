<?php
include("conn.php");
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
    echo "<script>alert('你还未登录！无权访问！');location.href='login.php';</script>";
} else {
    // 获取当前用户的用户名
    $username = $_SESSION['username'];
    // 查询admin表中的pd字段
    $query = "SELECT pd FROM admin WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    // 检查查询是否成功
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $pd = $row['pd'];

        // 判断pd是否为2，如果不是则提示无权访问
        if ($pd != 2) {
            session_destroy();
            echo "<script>alert('你还未授权！无权访问！请联系管理员授权！！！');location.href='login.php';</script>";
        }
    } else {
        // 查询失败的处理逻辑
        echo "查询数据库失败：" . mysqli_error($conn);
    }
}

// 关闭数据库连接
mysqli_close($conn);
?>
