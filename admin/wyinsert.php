<?php
include("../conn/conn.php");

$title=$_POST['wytit'];
$content=$_POST['wycontent'];
$d=date("Y-m-d H:i:s");
$sql="insert into tb_wy(wy_title,wy_content,wy_date) values('$title','$content','$d')";
$que=mysql_query($sql);
if($que){
 echo "<script>alert('发布成功')</script>";
 echo '<meta http-equiv="refresh" content="0;url=admin.php">';
}else{
 echo "<script>alert('好像有点小问题......')</script>";
 echo '<meta http-equiv="refresh" content="0;url=admin.php">';
}
mysql_close($dbconn);
?>