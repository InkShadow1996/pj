<?php
	//header('Content-type: text/html;charset=GB2312');		//指定发送数据的编码格式为GB2312
	$dbconn = mysql_connect("localhost", "root", "123456" )or die("数据库连接失败".mysql_error());
    $select = mysql_select_db("db_sqserv", $dbconn);
    if($select){
	echo "数据库连接成功";
}
	//$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE' , $RequestAjaxString);  //Ajax中先用encodeURIComponent对要提交的中文进行编码
	//mysql_query("set names gb2312");   //选择编码格式为GB2312
	$username=$_GET["zcuser"];
	$sql=mysql_query("select * from tb_member where zcuser='".$username."'");
	$info=mysql_fetch_array($sql);  //从数组结果集中获取消息
	if ($info){
		echo"很报歉!用户名[".$username."]已经被注册!";
	}else{
		echo"祝贺您!用户名[".$username."]没有被注册!";
	}
	mysql_close($dbconn);
?>
