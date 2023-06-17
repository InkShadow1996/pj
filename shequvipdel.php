<?php //本页面对用户进入社区界面进行权限判断
session_start(); 
if(!isset($_SESSION['user'])){
	echo "抱歉，请先登录";
}
else {
	$she = $_SESSION['user'];
	$dbconn = mysql_connect("localhost", "root", "123456" )or die("数据库连接失败".mysql_error());
    $select = mysql_select_db("db_sqserv", $dbconn);
	$sql="select zcvip from tb_member where zcuser = '$she'";
    $result=mysql_query($sql);
	$rs = mysql_fetch_array($result);
	if($rs['zcvip'] == 1){
		echo "<script>alert('尊敬的社区用户，欢迎您');</script>";
	    echo '<meta http-equiv="refresh" content="0;url=shequ.php">';
	}else{
		echo "<script>alert('您不是本社区用户或未在物业处登记，无权进入本版块');</script>";
		echo '<meta http-equiv="refresh" content="0;url=start.php">';
	}
    mysql_close($dbconn);
}
?>