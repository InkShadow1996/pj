<?php
    //连接数据库检测用户名输出结果
	//header('Content-type: text/html;charset=GB2312');		//指定发送数据的编码格式为GB2312
	$dbconn = mysql_connect("localhost", "root", "123456" )or die("数据库连接失败".mysql_error());
    $select = mysql_select_db("db_sqserv", $dbconn);
    if($select){
	echo "数据库连接成功";
    }
	//$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE' , $RequestAjaxString);  //Ajax中先用encodeURIComponent对要提交的中文进行编码
	//mysql_query("set names gb2312");   //选择编码格式为GB2312
	$sql="select * from tb_member where zcuser='$_GET[zcuser]'";
	$result=mysql_query($sql);  //从数组结果集中获取消息
	$row = mysql_fetch_array($result);
	if ($row){
		echo "很报歉!用户名[".$_GET["zcuser"]."]已经被注册!";
	}else{
	    echo "祝贺您!用户名[".$_GET["zcuser"]."]没有被注册!";
		
	}
	mysql_close($dbconn);
	
	
	/*mysql_fetch_array();直接使用要注意参数的个数以及正确形式，否arning: mysql_fetch_array() expects parameter 1 to be resource,      boolean given in则会报错*/
	/*原因：导致这类错误是我们语法不规范，最好还是分布处理，一条一条输出处理，如上所示*/
?>
