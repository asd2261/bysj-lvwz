<?php

session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
     echo "<script>alert('你还未登录！无权访问！');location.href='login.php';</script>";
}
?>
