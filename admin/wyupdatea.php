<?php
session_start();
include("../conn/conn.php");
$dc = $_SESSION['id'];

$titup = $_POST['wytitup'];
$contentup = $_POST['wytitup'];
$dup = date("Y-m-d H:i:s");
$sql = "update tb_wy set wy_title = '$titup',wy_content = '$contentup',wy_date = '$dup' where wy_id = '$dc'";
$result = mysql_query($sql);
if($result){
	echo "<script>alert('修改成功');</script>";
	unset($_SESSION['id']); 
    echo '<meta http-equiv="refresh" content="0;url=admin.php">';
}else{
	echo "<script>alert('出了点小问题，修改失败');</script>";
	echo '<meta http-equiv="refresh" content="0;url=admin.php">';
}
mysql_close($dbconn);
?>