<?php //显示注册用户
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
    <td align="center"><?php echo $row['mon_water'] ?></td>
    <td align="center"><?php echo $row['mon_ele']?></td>
    <td align="center"><?php echo $row['mon_gas']?></td>
    <td align="center"><?php echo $row['mon_date']?></td>
    <td align="center"><?php echo $row['mon_day']?></td>
</tr>
<?php
}
    }else{
 echo "<tr><td colspan='7'>网站还未有用户注册</td></tr>";
    }
mysql_close($dbconn);	
?>