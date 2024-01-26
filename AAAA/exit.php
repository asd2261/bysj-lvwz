<?php
session_start(); // 启动会话

if(isset($_GET['action']) && $_GET['action'] == 'exit') {
    // 如果action参数存在且值为'exit'，表示用户要退出
    // 在这里执行退出操作，例如清除用户的会话信息
    session_unset(); // 清空会话中的所有变量
    session_destroy(); // 销毁会话

    // 可选：你可以在这里添加其他退出操作，例如跳转到登录页面
    header("Location: login.php");
    exit(); // 退出脚本
} 
?>
