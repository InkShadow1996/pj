<?php
session_start();
include("../conn/conn.php");
if(!isset($_SESSION["user"])){
	echo "请先登录";
	echo '<meta http-equiv="refresh" content="5;url=start.php">';
	return false;
}else{
	echo "<script>alert(123);</script>";
	$cuser = $_SESSION["user"];
	$sqla = "select * from chat_member where chat_user = '$cuser'";
	$resulta = mysql_query($sqla);
	$num = mysql_num_rows($resulta);
	if($num == 1){
		echo '<meta http-equiv="refresh" content="0;url=chat.php">';
}else{	
    echo "<script>alert(456);</script>";
	$ip = $_SERVER['REMOTE_ADDR'];
	$chat_date = date("Y-m-d H:i:s");
	$sql = "insert into chat_member(chat_user,online_date,online_ip) value('$cuser','$chat_date','$ip')";
	$result = mysql_query($sql);
	if($result){
		mysql_close($dbconn);
		echo '<meta http-equiv="refresh" content="0;url=chat.php">';
}
}
}

?>