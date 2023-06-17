<?php //根据id删除二手置换版块帖子
include("../conn/conn.php");
$ac = $_POST['shid'];
$sql = "delete from tb_senda where senda_id = '$ac'";
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