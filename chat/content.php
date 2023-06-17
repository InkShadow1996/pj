<?php 
session_start();
include("../conn/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv=”refresh” content=”5;url=content.php”> 
</head>

<body>

   <td height="96">&nbsp;</td>
   <td align="left" class="STYLE1">
   <span class="STYLE1"><?php
   $query="select * from chat_message order by mtime";
   $result=mysql_query($query);
   echo mysql_error();
   while($row=mysql_fetch_array($result)){
   echo "[<font color=red>".$row[fromuser]."</font>]"."对";
   echo "[<font color=red>".$row[touser]."</font>]说:";
   echo "<font color='".$row[color]."'>".$row[from_mess]."</font>";
   echo "<br>";}
   ?>

</body>
</html>