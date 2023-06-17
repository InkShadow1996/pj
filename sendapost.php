<?php
session_start();
if(!isset($_POST["spa"])){
	echo "非法访问";
	return false;
}
if(!isset($_SESSION["user"])){
	echo "请先登录";
	echo '<meta http-equiv="refresh" content="5;url=start.php">';
	return false;
}

include("conn/conn.php");

$author=$_SESSION['user'];

$title=$_POST['titlea'];
$content=$_POST['contenta'];
$last_post_time=date("Y-m-d H:i:s");
$sql="insert into tb_senda(senda_subject,senda_content,senda_user,senda_date) values('$title','$content','$author','$last_post_time')";
$que=mysql_query($sql) or die(mysql_error());
if($que){
 echo "<script>alert('发布成功');location.href='secondhand.php';</script>";
}else{
 echo "<script>alert('好像有点小问题......');location.href='sendsea.php';</script>";
}
mysql_close($dbconn);
?>