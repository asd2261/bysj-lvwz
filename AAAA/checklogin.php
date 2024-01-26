
<?php
session_start();
include("conn.php");
header("Content-Type:text/html;charset=utf-8");
$username = $_POST["username"];
$password = $_POST["password"];

if ($username != NULL and $password != NULL ) {
  

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
    echo "<script>alert('邮箱或密码为空，请重新输入！');location.href='login.php';</script>";
}
?>
