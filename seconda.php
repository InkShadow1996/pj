<?php  //浏览贴子二手
// 创建连接

$dbconn = mysql_connect("localhost", "root", "123456" )or die("数据库连接失败".mysql_error());
$select = mysql_select_db("db_sqserv", $dbconn);
$perpage=5;//每页显示的数据个数
$rowCOUNT=0;//共有多少条数据$total
$pageNOW=1;//当前显示第几页$page
$pageCOUNT=0;//总页数$total_page
//最大页数和总记录数
$page=isset($_GET['page']) ?$_GET['page'] :1 ;//接收页码
$sql="select count(*) from tb_senda";
$result =mysql_query($sql);
$row=mysql_fetch_row($result);
$total = $row[0];//获取最大页码数
$total_page = ceil($total/$perpage);//向上整数
$start=($page-1)*$perpage;
/*echo "<script type='text/javascript'>alert('$total_page');</script>";*/
//临界点
$page=$page>$total_page ? $page:$total_page;//当下一页数大于最大页数时的情况
//分页设置初始化

$sqla="select * from tb_senda order by senda_id desc limit $start ,$perpage";
$que=mysql_query($sqla);
$sum=mysql_num_rows($que);
?>

<table width="600px" border="1" cellpadding="8" cellspacing="0" align="center">
 <tr class="title">
 <td colspan="3">二手置换帖子 <span class="list">[<a style="color: white" href="start.php">返回</a> ]</span></td>
 </tr>
 <tr>
 <td width="280px">帖子</td>
 <td width="160px" >作者</td>
 <td width="160px">发帖时间</td>
 </tr>
 <?php
 if($sum>0) {
 while($row=mysql_fetch_array($que)) {
 ?>
 <tr>
 <td width="280px"><div><a href="tiezia.php?senda_id=<?php echo $row['senda_id']?>&senda_subject=<?php echo $row['senda_subject'];?>"</a><?php echo $row['senda_subject'];?></div> </td>
 <td width="160px"><?php echo $row['senda_user'] ?></td>
 <td width="160px"><?php echo $row['senda_date']?></td>
 </tr>
 <tr>
 <td colspan="3">
 <?php }
 }
 else{
 echo "<tr><td colspan='5'>帖子已浏览完毕.....</td></tr>";
 } ?>
 </td>
 </tr>
 <tr>
 <td colspan="5">
 <div id="baner" style="margin-top: 20px">
 <a href="<?php
 echo "$_SERVER[PHP_SELF]?page=1"
 ?>">首页</a>
 &nbsp;&nbsp;<a href="<?php
 echo "$_SERVER[PHP_SELF]?page=".($page-1)  
 //$_SERVER 是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组。
 //例如，在地址为 http://example.com/foo/bar.php 的脚本中使用 $_SERVER['PHP_SELF'] 将得到 /foo/bar.php。
 
 ?>">上一页</a>
 <!-- 显示123456等页码按钮-->
 <?php
 for($i=1;$i<=$total_page;$i++){
 if($i==$page){ 
 echo "<a style='padding: 5px 5px;' href='$_SERVER[PHP_SELF]?page=$i'>$i</a>";
 }else{
 echo "<a style='padding: 5px 5px' href='$_SERVER[PHP_SELF]?page=$i'>$i</a>";
 }
 }
 ?>
 &nbsp;&nbsp;<a href="<?php
 echo "$_SERVER[PHP_SELF]?page=".($page+1)
 ?>">下一页</a>
 &nbsp;&nbsp;<a href="<?php
 echo "$_SERVER[PHP_SELF]?page={$total_page}"
 ?>">末页</a>
 &nbsp;&nbsp;<span>共<?php echo $total?>条</span>

<input name="sendahtml" type="button" value="发帖" onclick="javascrtpt:window.location.href='sendsea.php'" />
 </td>
 
     
 
 </tr>
</table>