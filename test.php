<?php //公告显示页
$id = $_GET['id'];
include("conn/conn.php");
$sql = "select wy_content from tb_wy where wy_id = '$id'";
$result = mysql_query($sql);
if($result){
	$row=mysql_fetch_array($result);
}else{
	echo "<script>alert('网站出了点小问题');</script>";
	echo '<meta http-equiv="refresh" content="0;url=start.php">';
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_GET['tit']; ?></title>
</head>
<style>

.gg{
	width:800px;
	height:500px;
	border:5px inset #C0C;
}

</style>
<body>

<table align="center" class="gg">
<tr>
    <td height="100px" align="center" valign="middle" style="font-size:36px"><?php echo $_GET['tit']; ?></td>
</tr>

<tr>
    <td height="400px" style="font-size:36px"><?php echo $row['wy_content']; ?> </td>
</tr>
</table>

</body>
</html>