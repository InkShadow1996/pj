<?php
//管理员登录处理页面
session_start();
if(!isset($_POST["adsub"])){
	echo "非法访问";
	return false;
}
$auser = trim($_POST['aduser']);
$apwd = trim($_POST['adpwd']);
$dbconn = mysql_connect("localhost", "root", "123456" )or die("数据库连接失败".mysql_error());
$select = mysql_select_db("db_sqserv", $dbconn);
if($select){
	echo "数据库连接成功";
}
//echo $auser;
$sql="select adpwd from tb_admin where aduser = '$auser'";
$result=mysql_query($sql);  //从数组结果集中获取消息
//$rs = mysql_fetch_array($result)or die(mysql_error());  //返回从结果集取得的数组
$num = mysql_num_rows($result);
//echo $num;
if($num==0){
	echo "很抱歉，用户名输入错误";
	echo '<br>';
	echo "<a href='admin.php'>点击返回登录</a>";
	return false;
}
else {
	$rs = mysql_fetch_array($result)or die(mysql_error());
	if($rs['adpwd']!=$apwd){
		echo "很抱歉，密码输入错误";
		echo '<br>';
	    echo "<a href='admin.php'>点击返回登录</a>";
	    return false;
	}
	else{
		echo "登陆成功，准备进入后台";
		$_SESSION['aduser'] = $auser;
		
		echo "<a href='admin.php'>点击返回登录</a>";
		echo '<meta http-equiv="refresh" content="5;url=admin.php">';
	}
}

mysql_close($dbconn);
?>