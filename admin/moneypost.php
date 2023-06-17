<?php
include("../conn/conn.php");
$id = $_POST['mu'];
$mw = $_POST['mw'];
$me = $_POST['me'];
$mg = $_POST['mg'];
$md = $_POST['md'];
$d = date("Y-m-d H:i:s");
$sql = "update tb_money set mon_water = '$mw',mon_ele = '$me',mon_gas = '$mg',mon_date = '$d',mon_day = '$md' where mon_id = '$id'";
$result = mysql_query($sql);
if($result){
	echo "<script>alert('添加成功');</script>";
	echo '<meta http-equiv="refresh" content="5;url=admin.php">';
}
mysql_close($dbconn);
?>