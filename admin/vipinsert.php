<?php
if(!isset($_POST["caozuo"])){
	echo "非法访问";
	return false;
}
$dbconn = mysql_connect("localhost", "root", "123456" )or die("数据库连接失败".mysql_error());
$select = mysql_select_db("db_sqserv", $dbconn);
$you = trim($_POST['youxiang']);
$shen = trim($_POST['shenfenzheng']);
$add = trim($_POST['address']);
$sqla = "select * from tb_vip where vipcardID = $shen";
$resulta=mysql_query($sqla);
$num = mysql_num_rows($resulta);
if($num != 0){
	echo "<script type='text/javascript'>alert('抱歉，该身份证已验证，请更换');</script>";
	echo '<meta http-equiv="refresh" content="0;url=admin.php">';
}
else{
$sqlb = "insert into tb_vip(vipemail,vipcardID,vipadd) values('$you','$shen','$add')";
$resultb=mysql_query($sqlb); 
if($resultb){
	echo "<script type='text/javascript'>alert('添加成功');</script>";
	echo '<meta http-equiv="refresh" content="0;url=admin.php">';
}
}
?>