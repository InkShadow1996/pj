<?php
//连接数据库
$dbconn = mysql_connect("localhost", "root", "123456" )or die("数据库连接失败".mysql_error());
$select = mysql_select_db("db_sqserv", $dbconn);
/*if($select){
	echo "数据库连接成功";
}*/
?>