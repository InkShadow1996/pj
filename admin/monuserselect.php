<?php //显示社区权限用户
include("../conn/conn.php");
$sql="select * from tb_money";
$res=mysql_query($sql);
$sum=mysql_num_rows($res);
if($sum>0) {
while ($row = mysql_fetch_array($res)) {
?>
<tr>
    
    <td align="center"><?php echo $row['mon_id'] ?></td>
    <td align="center"><?php echo $row['mon_user'] ?></td>

</tr>
<?php
}
    }else{
 echo "<tr><td colspan='6'>网站还未有用户进行权限验证</td></tr>";
    }
mysql_close($dbconn);	
?>