<?php  //session判断文件
session_start();
if($_SESSION['user']==""){
    echo "<script>alert('对不起，请登录后访问');window. location.href= 'start.php'; </script>";
}
?>