<?php //显示二手版块帖子
include("../conn/conn.php");
$sql="select * from tb_senda";
$res=mysql_query($sql);
$sum=mysql_num_rows($res);
if($sum>0) {
while ($row = mysql_fetch_array($res)) {
?>
<tr>
    
    <td align="center"><?php echo $row['senda_id'] ?></td>
    <td align="center"><?php echo $row['senda_subject'] ?></td>

</tr>
<?php
}
    }else{
 echo "<tr><td colspan='6'>网站还未有公告</td></tr>";
    }
mysql_close($dbconn);	
?>