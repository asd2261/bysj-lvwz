<?php require_once('yz.php'); ?>
<?php
session_start();
include("conn.php");
header("Content-Type:text/html;charset=utf-8");
$username = $_POST["username"];
$password = $_POST["password"];
$yzm = $_POST["yzm"];

if ($username != NULL and $password != NULL and $yzm != NULL) {
    // 判断输入的验证码是否正确
    if (strtolower($yzm) != $_SESSION["yzm"]) {
        echo "<script>alert('验证码不正确，请重新输入！');location.href='login.php';</script>";
    }

    $sql = "select * from admin where username='{$username}' and password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num > 0) {
        // 登录成功，设置 session 变量
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        echo "<script>alert('登录成功！');location.href='index.php';</script>";
    } else {
        echo "<script>alert('登录失败！');location.href='login.php';</script>";
    }
} else {
    echo "<script>alert('用户名、密码或验证码为空，请重新输入！');location.href='login.php';</script>";
}
?>
