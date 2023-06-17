<?php //显示公告标题
include("../conn/conn.php");
$sql="select * from tb_send";
$res=mysql_query($sql);
$sum=mysql_num_rows($res);
if($sum>0) {
while ($row = mysql_fetch_array($res)) {
?>
<tr>
    
    <td align="center"><?php echo $row['send_id'] ?></td>
    <td align="center"><?php echo $row['send_subject'] ?></td>

</tr>
<?php
}
    }else{
 echo "<tr><td colspan='6'>网站还未有公告</td></tr>";
    }
mysql_close($dbconn);	
?>