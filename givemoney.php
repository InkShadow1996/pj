<?php
session_start();
include("conn/conn.php");
$ac = $_SESSION['user'];
$sqlc = "select mon_key from tb_money where mon_user = '$ac'";
$resultc = mysql_query($sqlc) or die(mysql_error());
$queryc = mysql_fetch_array($resultc); 
$mkey = $queryc['mon_key'];
if($mkey == 1){
	echo "<script>alert('您已缴费成功');</script>";
	echo '<meta http-equiv="refresh" content="0;url=shequ.php">';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>水电煤气物业费缴纳通知</title>
<link href="css/shequ.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php

$sql = "select cardID from tb_member where zcuser = '$ac'";
$result = mysql_query($sql);
$query = mysql_fetch_array($result);  //获取查询结果的具体字段值
$card = $query['cardID'];

$sqla = "select vipadd from tb_vip where vipcardID = '$card'";
$resulta = mysql_query($sqla);
$querya = mysql_fetch_array($resulta);
$add = $querya['vipadd'];

$sqlb = "select * from tb_money where mon_user = '$ac'";
$resultb = mysql_query($sqlb);
$queryb = mysql_fetch_array($resultb);
$mw = $queryb['mon_water'];
$me = $queryb['mon_ele'];
$mg = $queryb['mon_gas'];
$sum = $me+$mg+$mw;
?>
<div id="givemoney">
<p class="p1"><?php echo '欢迎社区住户:'.$ac ?></p>
<p class="p2"><?php echo '您的住址:'.$add ?></p>
<table class="getm" rules="all" >
  <tr> 
      <td align="center" style="font-size:30px">总费用</td>
      <td align="center" style="font-size:30px">水费</td>
      <td align="center" style="font-size:30px">电费</td>
      <td align="center" style="font-size:30px" >煤气费</td>
  </tr>
  
  <tr>
      <td align="center" style="font-size:30px" ><?php echo $sum ?></td>
      <td align="center" style="font-size:30px" ><?php echo $mw ?></td>
      <td align="center" style="font-size:30px" ><?php echo $me ?></td>
      <td align="center" style="font-size:30px"><?php echo $mg ?></td>
  </tr>
</table>
<p class="p3">请您及时到物业处缴费，或</p>
<p class="p4">扫描二维码，后台管理员在收款后会及时发送信息与您核查<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="pictures/money.jpg"  width="100px" height="100px;"/></p>
</div>'
</body>
</html>