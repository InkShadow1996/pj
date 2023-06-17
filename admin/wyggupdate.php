<?php
session_start();
include("../conn/conn.php");
$ac = $_POST['wyida'];
$sql = "select * from tb_wy where wy_id = '$ac'";
$result = mysql_query($sql);
$query = mysql_fetch_array($result);
$tit = $query['wy_title'];
$con = $query['wy_content'];
$d = date("Y-m-d H:i:s");
$_SESSION['id'] = $ac;
mysql_close($dbconn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>公告修改</title>
<script type="text/javascript">
function wyup(){
	if (wypostup.wytitup.value==""){
     alert("标题不能为空");wypostup.wytitup.focus();return false;
	}
	if (wypostup.wycontentup.value==""){
     alert("公告内容不能为空");wypostup.wycontentup.focus();return false;
    }
}
</script>
<style type="text/css">
table{
	border:5px groove #903;
	width:500px;
	height:500px;
}
</style>
</head>
<body>
<form name="wypostup" method="POST" action="wyupdatea.php">
<table align="center">
<tr>
    <td>标题<input name="wytitup" type="text" value="<?php echo $tit; ?>" size="13" maxlength="100" style="width:400px"/></td>
</tr>

<tr>
    <td align="center"><textarea cols="100" rows="15" name="wycontentup" ><?php echo $con; ?></textarea></td>
</tr>
   
<tr>
    <td align="center"><input name="upda" type="submit" value="修改" onclick="return wyup()" /></td>
</tr>
</table>
</form>

</body>
</html>