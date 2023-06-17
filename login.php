<?php
//登录处理页面
session_start();
/*if(!isset($_POST["but1"])){
	echo "非法访问";
	return false;
}*/
$luser = trim($_POST['user']);
$lpwd = trim($_POST['pwd']);
include("conn/conn.php");
$query = "select id from tb_member where zcuser = '$luser'";             // and zcpwd1 = '$lpwd' limit 1";
$result = mysql_query($query);
$result1 = mysql_num_rows($result); //返回结果集中行的数目
echo $result1;
if($result1 == 0){
	echo "<script>alert('抱歉用户名错误，请重新登录');</script>";
	echo '<meta http-equiv="refresh" content="0;url=start.php">';
}
else{
	$query1 = "select zcpwd1 from tb_member where zcuser = '$luser'";
	$result2 = mysql_query($query1);
	$result3 = mysql_fetch_array($result2);
	//echo $result3['zcpwd1'];
	if($lpwd == $result3['zcpwd1']){
    //$row = mysql_fetch_array($result);
	echo "<script>alert('登陆成功');</script>";
	$_SESSION['user'] = $luser;
	$_SESSION['id'] = $row['id'];
    echo '<meta http-equiv="refresh" content="0;url=start.php">';
	}
	else{
		echo "<script>alert('密码错误');</script>";
		echo '<meta http-equiv="refresh" content="0;url=start.php">';
	}
}
