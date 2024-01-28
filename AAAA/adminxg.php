<?php
require_once('yz.php');
include "conn.php";

// 获取表单数据
$username = $_POST["username"];
$password = $_POST["password"];
$pd = $_POST["pd"];
$id = $_GET["id"];

// 确保用户名和密码不为空
if (empty($username) || empty($password)) {
    echo "<script>alert('用户名和密码不能为空');location.href='modifyadmin.php?id={$id}';</script>";
    exit;
}

// 密码长度验证
if (strlen($password) < 6) {
    echo "<script>alert('密码不能少于6位');location.href='modifyadmin.php?id={$id}';</script>";
    exit;
}

// 查询是否存在相同用户名
$queryCheck = "SELECT * FROM admin WHERE username='{$username}' AND id != {$id}";
$resultCheck = mysqli_query($conn, $queryCheck);

if (mysqli_num_rows($resultCheck) > 0) {
    echo "<script>alert('用户名已存在，请选择其他用户名');location.href='modifyadmin.php?id={$id}';</script>";
    exit;
}

// 修改操作
$query = "UPDATE admin SET username='{$username}', password='{$password}', pd='{$pd}' , rq=CURRENT_TIMESTAMP WHERE id={$id}";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('成功');location.href='adminlook.php';</script>";
} else {
    echo "<script>alert('失败');location.href='modifyadmin.php?id={$id}';</script>";
}
