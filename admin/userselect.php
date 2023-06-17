<?php //显示注册用户
$sql="select * from tb_member";
$res=mysql_query($sql);
$sum=mysql_num_rows($res);
if($sum>0) {
while ($row = mysql_fetch_array($res)) {
?>
<tr>
    
    <td align="center"><?php echo $row['zcuser'] ?></td>
    <td align="center"><?php echo $row['zcpwd1'] ?></td>
    <td align="center"><?php echo $row['email']?></td>
    <td align="center"><?php echo $row['cardID']?></td>
    <td align="center"><?php echo $row['zcvip']?></td>
    <td align="center"><?php echo $row['id']?></td>
</tr>
<?php
}
    }else{
 echo "<tr><td colspan='6'>网站还未有用户注册</td></tr>";
    }
mysql_close($dbconn);	
?>