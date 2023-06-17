<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>社区后台管理</title>
<link href="css/after.css" rel="stylesheet" type="text/css" /> 
</head>

<body>
<script src="admin/js/adtext1.js" language="javascript"></script>
<div id="fengzhuang">

<div class="clearfix">
    <h1>社区后台管理</h1>
    <p class="lianjie"><a href="sessiondesa.php"">安全退出</a></p>
</div>

<div class="menu">

      <div>
        <h3 align="center">管理菜单</h3>
    </div>
    <div class="bd">
        
            <li>
                <h4 >
                    <span class="s1">用户管理</span>
                </h4>
               
                    <li><p class="sl"><a href="?">用户查询</a></p></li>
                
            </li>
            <li>
                <h4>
                    <spanclass="s1" >版块管理</span>
                </h4>
                    <li><p class="sl"><a href="?">添加版块</a></p></li>
                    <li><p class="sl"><a href="?">删除版块</a></p></li>
            </li>
            <li class="item media">
               <h4>
                    <span>Posts</span>
                </h4>
                
                    <li><a href="?">Add post</a></li>
                    <li><a href="?">Edit posts</a></li>
                    <li><a href="?">Manage categories</a></li>
                    <li><a href="?">Manage tags</a></li>
                
            </li>
            <li class="item comments on">
                <h4 >
                    <span>Posts</span>
                </h4>
                
                    <li><a href="?">Add post</a></li>
                    <li><a href="?">Edit posts</a></li>
                    <li><a href="?">Manage categories</a></li>
                    <li><a href="?">Manage tags</a></li>
                
            </li>
            <li class="item settings on">
                <h4 >
                    <span>Posts</span>
                </h4>
                
                    <li><a href="?">Add post</a></li>
                    <li><a href="?">Edit posts</a></li>
                    <li><a href="?">Manage categories</a></li>
                    <li><a href="?">Manage tags</a></li>
               
            </li>
       
    </div>

</div>
<div class="r1">
<p class="r12">欢迎来到社区管理系统</p>
</div>

</div>
</body>
</html>

<?php
 
 $sqla = "select * from tb_reply where send_bankuai = '0' and send_id = '$id'";
 $quea = mysql_query($sqla);
 $rowa = mysql_fetch_array($quea);
 print_r ($rowa);
 if(!$rowa){
 echo "<tr>
 <td colspan='2'>暂时还没有回复哦！！！</td>
 </tr>";
 }else{
	 while( $rowa = mysql_fetch_array($quea)){
 echo "<tr>
 <td>回复人:".$rowa['reply_user']. ".".$rowa['reply_date']."</td>
 <td>".$rowa['reply_content']."</td>
 </tr>";}
 }
 ?>













<table width="600px" border="1" cellpadding="12" cellspacing="0" align="center">
 <tr>
 <td rowspan="2" class="left">
 回帖人：
 <?php
 echo $rowa['reply_user'];
 ?>
 </td>
 <td>回帖时间：<?php echo $rowa['reply_date']; ?></td>
 </tr>
 
 <tr class="ind">
 <td><?php $rowa['reply_content']; ?></td>
 </tr>
 </table>









<tr>
    <td>回帖人:<?php echo $rowa['reply_user']; echo "<br>"; 回帖时间:echo $rowa['reply_date']; ?></td>
    <td><?php echo $rowa['reply_content']; ?></td>
</tr>












