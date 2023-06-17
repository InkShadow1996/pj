<?php
session_start();
?>
<?php if(!isset($_SESSION['aduser'])) { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员登录</title>
<link href="css/adm.css" rel="stylesheet" type="text/css" /> 
</head>

<body>
<div id="adm">
<script src="js/adtext.js" language="javascript"></script>
<table id="adm1" >
   <tr height="150px">
       <td><p class="fon">后台管理员登陆</p></td>
   </tr>
   
   <tr>
       <td>
       
       <form name="admin" method="POST" action="addldel.php"  >
       <table  rules="all" border="5px double" class="admdl">
            <tr>
                <td><p class="p1">用户名:</p></td>
                <td><input name="aduser" id="aduser" type="text" value="" size="13" maxlength="100" style="width:150px" />
            </tr>
            
            <tr>
                <td><p class="p1">密&nbsp;&nbsp;&nbsp;码:</p></td>
                <td><input name="adpwd" id="adpwd" type="password" value="" size="13" maxlength="100" style="width:150px" />
            </tr>
            
            <tr>
                <td colspan="2" align="center"><input name="adsub" type="submit" value="登录" onclick="return checkad()" />
                <span id="read"></span>
            </tr>
           </table>
           </form>
       </td>
   </tr>
</table>
</div>
</body>
</html>

<?php } else { ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>社区后台管理</title>
<link href="css/after.css" rel="stylesheet" type="text/css" /> 
</head>

<body >

<div id="fengzhuang">
<script src="js/adtext1.js" language="javascript"></script>
<div class="clearfix">
    <h1>社区后台管理</h1>
    <p class="lianjie"><a href="sessiondesa.php"">安全退出</a></p>
</div>

<div class="frame">
<div class="menu" align="center" >

      
        
    
    <div class="bd">
        <h3 align="center">管理菜单</h3>
            <li>
                <h4 >
                    <span class="s1">用户管理</span>
                </h4>
               
                    <li><input class="s2" name="ma" type="button" value="用户查询" onclick="show('adusmag')"/></li>
                    <li><input class="s2" name="mb" type="button" value="权限添加" onclick="show('advip')"/></li>
            </li>
            <li>
                <h4>
                    <span class="s1" >帖子管理</span>
                </h4>
                    
                    <li><input class="s2" name="mc" type="button" value="房屋租售" onclick="show('rsarea')" /></li>
                    <li><input class="s2" name="md" type="button" value="二手信息" onclick="show('sharea')"/></li>
                    
            </li>
            <li class="item media">
               <h4>
                    <span>物业公告管理</span>
                </h4>
                
                    <li><input class="s2" name="wuye" type="button" value="物业公告输入" onclick="show('wyinsert')" /></li>
                    <li><input class="s2" name="wymag" type="button" value="物业公告管理" onclick="show('wydel')" /></li>
            </li>
            <li class="item comments on">
                <h4 >
                    <span>缴费管理</span>
                </h4>
                
                    <li><input class="s2" name="mz" type="button" value="缴费输入" onclick="show('moninto')" /></li>
                    <li><input class="s2" name="my" type="button" value="信息核查" onclick="show('monget')"/></li>
            </li>
            
       
    </div>

</div>

<?php
$dbconn = mysql_connect("localhost", "root", "123456" )or die("数据库连接失败".mysql_error());
$select = mysql_select_db("db_sqserv", $dbconn);
/*if($select){
	echo "数据库连接成功";
}*/
?>

<div id="resu">
<div id="face" class="rl" style="display:inline" >
<p class="r12">欢迎来到社区管理系统</p>
<p>请注意，刷新会重置操作</p>
</div>


<div id="adusmag" class="rl" style="display:none">
<p class="r12">操作简介</p>
<br/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本操作栏可进行用户的查询，删除</p>
<div style="overflow:auto">
<table class="userselect" rules="all" action="userdelete.php" > 
   <tr class="title">
       <td colspan="6" height="30px"align="center" >用户列表</td>
   </tr>
   
   <tr>
        <td height="30px" width="150px" align="center">用户名</td>
        <td height="30px" width="150px" align="center" >密码</td>
        <td height="30px" width="220px" align="center" >邮箱</td>
        <td height="30px" width="220px" align="center">身份证</td>
        <td height="30px" width="60px" align="center">权限</td>
        <td height="30px" width="60px" align="center">ID</td>
   </tr>
<?php
include("userselect.php");
 ?>   
<form method="post" action="userdel.php">
<table class="insert" rules="all" >
   <tr class="title">
       <td colspan="2" height="30px"align="center" >用户删除</td>
   </tr>
   
   <tr>
       <td align="center">ID:<input name="userid" type="text" value="" size="13" maxlength="100" style="width:50px"></td>
       <td align="center"><input name="useridp" type="submit" value="删除"></td>
   </tr>
</table>
</form>
</table>

</div>
</div>

<div id="advip" class="rl" style="display:none">
<p class="r12">操作简介</p>
<br/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本操作栏为物业工作人员对权限检测表进行添加</p>
<div >
<table class="userselect" rules="all"  > 
   <tr class="title">
       <td colspan="4" height="30px"align="center" >用户列表</td>
   </tr>
   
   <tr> 
        
        <td height="30px" width="300px" align="center">邮箱</td>
        <td height="30px" width="300px" align="center">身份证</td>
        <td height="30px" width="300px" align="center">用户住址</td>
        <td height="30px" width="100px" align="center">操作</td>
   </tr>
   
   <tr>
   <script src="js/adtext1.js" language="javascript"></script>
   <form name="vipinsert" method="POST" action="vipinsert.php">
       <td align="center"><input name="youxiang" type="text" value="" size="13" maxlength="100" style="width:200px"/></td>
       <td align="center"><input name="shenfenzheng" type="text" value="" size="13" maxlength="100" style="width:200px"/></td>
       <td align="center"><input name="address" type="text" value="" size="13" maxlength="100" style="width:200px"/></td>
       <td align="center"><input name="caozuo" type="submit" value="插入" onclick="return vip()" /></td>
    </form>
   </tr>
</table>
</div>
</div>


<div id="bdel" class="rl" style="display:none">
<p class="r12">123</p>
</div>


<div id="badd" class="rl" style="display:none">
<p class="r12">789</p>
</div>


<div id="moninto" class="rl" style="display:none">
<p class="r12">操作简介</p>
<br/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本操作栏是管理人员输入缴纳费用</p>
<div style="overflow:auto">
<table class="userselect" rules="all"  > 
   <tr class="title">
       <td colspan="2" height="30px"align="center" >社区用户列表</td>
   </tr>
   
   <tr>
        <td height="30px" width="150px" align="center">ID</td>
        <td height="30px" width="150px" align="center" >用户名</td>
        
   </tr>
<?php
include("monuserselect.php");
?>   
</table>

<form method="post" action="moneypost.php">
<table rules="all" class="insert">
   <tr class="title">
       <td colspan="2" height="30px"align="center" >输入菜单</td>
   </tr>
  
   <tr>
       <td rowspan="4">id:&nbsp;&nbsp;<input name="mu" type="text" value="" size="13" maxlength="100" style="width:50px"></td>
       <td>水费:&nbsp;&nbsp;<input name="mw" type="text" value="" size="13" maxlength="100" style="width:150px"></td>
   </tr> 
   
   <tr>
       <td>电费:&nbsp;&nbsp;<input name="me" type="text" value="" size="13" maxlength="100" style="width:150px"></td>
   </tr>
   
   <tr>
       <td>煤气费:<input name="mg" type="text" value="" size="13" maxlength="100" style="width:150px"></td>
   </tr>
   
   <tr>
       <td>缴纳期限: <input name="md" type="text" value="" size="13" maxlength="100" style="width:150px"></td>
   </tr>
   
   <tr>
       <td colspan="2" align="center" ><input name="mp" type="submit" value="提交"></td>
   </tr>
</table>
</form>
</div>
</div>


<div id="monget" class="rl" style="display:none">
<p class="r12">操作简介</p>
<br/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本栏返回缴费的完整消息,管理人员可通过输入ID变更用户的缴费标志</p>
<div style="overflow:auto">
<table class="userselect" rules="all" > 
   <tr class="title">
       <td colspan="7" height="30px"align="center" >信息列表</td>
   </tr>
   
   <tr>
        <td height="30px" width="150px" align="center">ID</td>
        <td height="30px" width="150px" align="center">用户名</td>
        <td height="30px" width="150px" align="center" >水费</td>
        <td height="30px" width="220px" align="center" >电费</td>
        <td height="30px" width="220px" align="center">煤气费</td>
        <td height="30px" width="60px" align="center">通知时间</td>
        <td height="30px" width="60px" align="center">期限</td>
   </tr>
<?php
include("monselectafter.php");
?>   

</form>
</table>

<form method="post" action="moneyiddel.php">
<table class="insert" rules="all" >
   <tr class="title">
       <td colspan="2" height="30px"align="center" >缴费标志变更</td>
   </tr>
   
   <tr>
       <td align="center">ID:<input name="mid" type="text" value="" size="13" maxlength="100" style="width:50px"></td>
       <td align="center"><input name="midp" type="submit" value="提交"></td>
   </tr>
</table>
</form>
</div>
</div>

<div id="wyinsert" class="rl" style="display:none">
<p class="r12">操作简介</p>
<br/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本操作栏为物业工作人员发布物业公告</p>
<div >
<script src="js/adtext1.js" language="javascript"></script>
   <form name="wypost" method="POST" action="wyinsert.php">
<table class="userselect" rules="all"  > 
   <tr class="title">
       <td height="30px"align="center" >物业公告</td>
   </tr>
   
   <tr>
       <td>标题<input name="wytit" type="text" value="" size="13" maxlength="100" style="width:400px"/></td>
   </tr>
   
   <tr>
       <td align="center"><textarea cols="100" rows="15" name="wycontent" id="wytext" ></textarea></td>
   </tr>
   
   <tr>
       <td align="center"><input name="fabu" type="submit" value="发布" onclick="return wy()" /></td>
   </tr>
</table>
</form>
</div>
</div>


<div id="wydel" class="rl" style="display:none">
<p class="r12">操作简介</p>
<br/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本栏用于公告信息的删除和修改</p>
<div  style="min-height:250px; max-height:300px; overflow-y:auto">
<table class="userselect" rules="all" > 
   <tr class="title">
       <td colspan="2" height="30px"align="center" >公告列表</td>
   </tr>
   
   <tr>
        <td height="30px" width="150px" align="center">ID</td>
        <td height="30px" width="150px" align="center">标题</td>
        
   </tr>
<?php
include("wyselect.php");
?>   
</table>
</div>

<form method="post" action="wyggdelete.php">
<table class="insert" rules="all" >
   <tr class="title">
       <td colspan="2" height="30px"align="center" >公告删除</td>
   </tr>
   
   <tr>
       <td align="center">ID:<input name="wyid" type="text" value="" size="13" maxlength="100" style="width:50px"></td>
       <td align="center"><input name="wysub" type="submit" value="删除"></td>
   </tr>
</table>
</form>

<form method="post" action="wyggupdate.php">
<table class="insert" rules="all" >
   <tr class="title">
       <td colspan="2" height="30px" align="center" >公告修改</td>
   </tr>
   
   <tr>
       <td align="center">ID:<input name="wyida" type="text" value="" size="13" maxlength="100" style="width:50px"></td>
       <td align="center"><input name="wysuba" type="submit" value="修改"></td>
   </tr>
</table>
</form>
</div>




<div id="rsarea" class="rl" style="display:none">
<p class="r12">操作简介</p>
<br/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;查询和删除房屋租售版块的帖子</p>
<div >
<table class="userselect" rules="all" > 
   <tr class="title">
       <td colspan="2" height="30px"align="center" >帖子列表</td>
   </tr>
   
   <tr>
        <td height="30px" width="150px" align="center">ID</td>
        <td height="30px" width="150px" align="center">标题</td>
        
   </tr>
<?php
include("rsselect.php");
?>   
</table>
</div>

<form method="post" action="rsdelete.php">
<table class="insert" rules="all" >
   <tr class="title">
       <td colspan="2" height="30px"align="center" >帖子删除</td>
   </tr>
   
   <tr>
       <td align="center">ID:<input name="rsid" type="text" value="" size="13" maxlength="100" style="width:50px"></td>
       <td align="center"><input name="rssub" type="submit" value="删除"></td>
   </tr>
</table>
</form>
</div>



<div id="sharea" class="rl" style="display:none">
<p class="r12">操作简介</p>
<br/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;查询和删除二手置换版块的帖子</p>
<div >
<table class="userselect" rules="all" > 
   <tr class="title">
       <td colspan="2" height="30px"align="center" >帖子列表</td>
   </tr>
   
   <tr>
        <td height="30px" width="150px" align="center">ID</td>
        <td height="30px" width="150px" align="center">标题</td>
        
   </tr>
<?php
include("shselect.php");
?>   
</table>
</div>

<form method="post" action="shdelete.php">
<table class="insert" rules="all" >
   <tr class="title">
       <td colspan="2" height="30px"align="center" >帖子删除</td>
   </tr>
   
   <tr>
       <td align="center">ID:<input name="shid" type="text" value="" size="13" maxlength="100" style="width:50px"></td>
       <td align="center"><input name="shsub" type="submit" value="删除"></td>
   </tr>
</table>
</form>
</div>







</div>
</div>
</body>
</html>



<?php } ?>
