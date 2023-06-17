<?php
//注册处理页面
session_start();
if(!isset($_POST["zctj"])){
	echo "非法访问";
	return false;
}
include("conn/conn.php");
$query = "insert into tb_member(zcuser, zcpwd1, email, cardID) value('$_POST[zcuser]', '$_POST[zcpwd1]', '$_POST[email]', '$_POST[cardID]')";
$result = mysql_query($query)or die("数据注册失败".mysql_error());
if($query){
	echo "<script>alert('注册成功,请返回登录');</script>";
	echo '<meta http-equiv="refresh" content="0;url=start.php">';
}
mysql_close($dbconn);

?>