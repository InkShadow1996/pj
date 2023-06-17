<?php
session_start();
include("../conn/conn.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<center>

<?php 
$sql="select * from chat_member where online_id";   
$result=mysql_query($sql);
$num=mysql_num_rows($result);  //获得在线总人数
echo "<p><font color=blue>欢迎来到聊天室</font><font color=red>".$_SESSION["user"];
echo "<p>聊天室共有".$num."人:</font></p>";
while($user=mysql_fetch_array($result)){
     echo "<font color=red>".$user[chat_user]."</font><br>";
	 }
     $dt=date("H:i:s");   
     echo "<br><font color=blue>当前时间:</font><br><font color=red>".$dt."</font>"; 

?>
</center>
</body>
</html>