<?php  //tb_money标志位更改
include("../conn/conn.php");
$id = $_POST['mid'];
$sql = "update tb_money set mon_key = '1' where mon_id = '$id'";
$result = mysql_query($sql);
if($result){
	echo "<script>alert('更改成功');</script>";
	echo '<meta http-equiv="refresh" content="0;url=admin.php">';
}
mysql_close($dbconn);
?>