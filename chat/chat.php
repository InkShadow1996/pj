<?php
session_start();
if(!isset($_SESSION["user"])){
	echo "请先登录";
	echo '<meta http-equiv="refresh" content="5;url=start.php">';
	return false;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>聊天室</title>
</head>




  <frameset rows="66%,123" cols="*" framespacing="1" frameborder="yes" border="1" bordercolor="#EFF3FF">
    <frameset rows="*" cols="205,*" framespacing="1" frameborder="yes" border="1" bordercolor="#EFF3FF">
      <frame src="left.php" name="leftFrame" noresize>
      <frame src="content.php" name="contentFrame"  noresize>
    </frameset>
    <frame src="bot.php" name="bottomFrame"  noresize>
  </frameset>
</frameset><noframes>
<body></body>
</noframes>
</html>
