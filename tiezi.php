<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_GET['send_subject']; ?></title>
</head>

<body>

<?php

include("header.php");

include("conn/conn.php");

$id=$_GET['send_id'];
/*echo "<script>alert($id);</script>";*/
$sql="select * from tb_send where send_id='$id'";
$que=mysql_query($sql);
$row=mysql_fetch_array($que);
?>

<style>
.tie{
	margin-top:100px;
	margin-right:100px;
	margin-left:100px;
	
}

.left{
width: 170px;
}
 
.bg{
background-color: #B10707;
color: white;
}
 
.fh{
margin-left: 18px;
}
 
.spa{
margin-left: 25px;
}

.ind{
text-indent:2em; /*设置首行缩进*/
}

</style>
<div class="tie">
<table width="600px" border="1" cellpadding="12" cellspacing="0" align="center">
 <tr>
 <td colspan="2" class="bg"><?php echo $row['send_subject'] ?>
 <span class="fh"><a style="color: white" href="roomsale.php">[返回]</a></span>
 <span class="spa"><a href="reply.php?send_id=<?php echo $row['send_id']?>&send_subject=<?php echo $row['send_subject'];?>">回复</a></span>
 </td>
 </tr>

 <tr>
 <td class="left">
 <?php
 echo '发帖人:'.$row['send_user'];
 echo "<br>";
 echo '发帖时间:'.$row['send_date'];
 ?>
 </td>
 
 <td class="ind"><?php echo $row['send_content']?></td>

 
 <?php
 
 $sqla = "select * from tb_reply where send_bankuai = '0' and send_id = '$id'";
 $quea = mysql_query($sqla);
 $sum = mysql_num_rows($quea);
 /*print_r ($rowa);*/
 if($sum == 0){
 echo "<tr>
 <td colspan='2'>暂时还没有回复哦！！！</td>
 </tr>";
 }else{
	 while($rowa = mysql_fetch_array($quea)){

		 
?>

<tr>
   <td><?php echo $rowa['reply_user'];?></td>
   <td><?php echo $rowa['reply_content'];?></td>
</tr>




<?php

	 }
 }
mysql_close($dbconn);
?>
</table>
</div>
</body>
</html>