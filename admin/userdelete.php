<?php
if(!isset($_POST["zhixing"])){
	echo "非法访问";
	return false;
}
$dbconn = mysql_connect("localhost", "root", "123456" )or die("数据库连接失败".mysql_error());
$select = mysql_select_db("db_sqserv", $dbconn);
if($select){
	echo "数据库连接成功";
}
echo 123;
echo $row['zcuser'];
$sql="select adpwd from tb_admin where aduser = '$auser'";
?>