<?php
//本网页进行权限验证
session_start();
$dbconn = mysql_connect("localhost", "root", "123456" )or die("数据库连接失败".mysql_error());
$select = mysql_select_db("db_sqserv", $dbconn);
$ac = $_SESSION['user'];
$sqlz = "select zcvip from tb_member where zcuser = '$ac'";
$resultz = mysql_query($sqlz);
if($resultz == 1){
	echo "<script type='text/javascript'>alert('您以验证过，请不要反复操作');</script>";
    echo '<meta http-equiv="refresh" content="5;url=certer.php">';
}else{


$sql="select cardID from tb_member where zcuser = '$ac'";
$result=mysql_query($sql);
$rs = mysql_fetch_array($result);
if($rs['cardID']){
	$dc = $rs['cardID'];
	/*echo "<script type='text/javascript'>alert('$dc');</script>";*/
	$sqla="select vipemail from tb_vip where vipcardID = '$dc'";
	$resulta=mysql_query($sqla);
	$rsa = mysql_fetch_array($resulta);
	/*$abc=$rsa['vipemail'];*/
	/*echo "<script type='text/javascript'>alert('$abc');</script>";*/
	if(!$rsa['vipemail']){
		echo "<script type='text/javascript'>alert('抱歉，您不是社区用户，无法进行权限认证');</script>";
		echo '<meta http-equiv="refresh" content="5;url=start.php">';
	}
	else{
		$acdc = $rsa['vipemail'];
		$sqlb="select email from tb_member where zcuser = '$ac'";
        $resultb=mysql_query($sqlb);
        $rsb = mysql_fetch_array($resultb);
		$abc = $rsb['email'];
		if($abc==$acdc){
			echo "<script type='text/javascript'>alert('认证成功，请等待，权限修改后自动返回主页');</script>";
			$sqlc="update tb_member set zcvip = '1' where zcuser = '$ac'";
			mysql_query($sqlc);
			
			$sqld = "insert into tb_money(mon_user) values('$ac')";
			mysql_query($sqld);
			
			echo '<meta http-equiv="refresh" content="5;url=start.php">';
		}
	}
	
}
}

mysql_close($dbconn);
?>