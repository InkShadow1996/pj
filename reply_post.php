<?php
session_start();
$id=$_GET['send_id'];
$reply_author=$_SESSION['user'];
$reply=$_POST['reply'];
$reply_time=date("Y-m-d H:i:s");
$bankuai = '0';
// 创建连接
include("conn/conn.php");

$sql="insert into tb_reply(reply_content,reply_user,send_id,reply_date,send_bankuai) values('$reply','$reply_author','$id','$reply_time','$bankuai')";
$que=mysql_query($sql);
if($que){
 mysql_close($dbconn);
 echo "<script>alert('回复成功');location.href='roomsale.php?page=1';</script>";
}else{
 echo "<script>alert('你的回复好像有点小问题.....');location.href='start.php';</script>";
}
?>