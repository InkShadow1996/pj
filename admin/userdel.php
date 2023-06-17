<?php //根据id删除用户
include("../conn/conn.php");
$ac = $_POST['userid'];
$sql = "delete from tb_member where id = '$ac'";
$result = mysql_query($sql);
if($result){
	echo "<script>alert('删除成功');</script>";
    echo '<meta http-equiv="refresh" content="0;url=admin.php">';
}
else{
	echo "<script>alert('出了点小问题，删除失败');</script>";
	echo '<meta http-equiv="refresh" content="0;url=admin.php">';
}

mysql_close($dbconn);
?>