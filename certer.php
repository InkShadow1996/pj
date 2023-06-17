<?php
session_start();
if(!isset($_SESSION['user'])) {
	echo "<script type='text/javascript'>alert('请先登录');</script>";
}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户中心</title>
<link href="css/text.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
include("header.php");
?>
<div id="usercenter">
<table rules="all">
<tr align="center" height="100px">
    <td width="311px"><?php echo "用户名:".$_SESSION['user'];?></td>
    <td width="311px"><a href="vipdel.php">权限认证</a></td>
    <td width="311px"><a href="sessdestory.php">安全退出</a></td>
</tr>

<tr align="center" height="100px">
    <td width="311px"><?php date_default_timezone_set("Asia/Hong_Kong"); echo "当前时间:".date("Y-m-d H:i:s"); ?></td>
    <td rowspan="3" colspan="2"></td>
</tr>

<tr align="center" height="100px">
    <td>帖子</td>
</tr>

<tr align="center" height="100px" >
    <td>我的消息</td>
</tr>
</table>

</div>
</body>
</html>