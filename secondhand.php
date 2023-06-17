<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>二手置换</title>
<link href="css/text.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
include("header.php");
?>
<div id="only">

<?php if(!isset($_SESSION['user'])) { ?>


<div class="div1" >
<script src="js/login.js" language="javascript"></script>
<form name="denglu" method="POST" action="login.php" >
   <table class="denglu">
     <tr valign="middle">
          <td width="50" height="90">用户名:</td>
          <td width="150" height="90"> <input name="user" id="user" type="text" value="" size="13" maxlength="100" /> </td>
     </tr> 
     <tr valign="middle">
          <td width="50" height="90">密&nbsp;&nbsp;&nbsp;码:</td>
          <td width="150" height="90"> <input name="pwd"  id="pwd" type="password" value="" size="13" maxlength="100" /> </td>
     </tr> 
     <tr valign="middle">
          <td width="100" height="90" align="center"><input name="but1" type="submit" value="登录" onclick="return checklog()"/></td>
          <td width="100" height="90" align="center"><input name="but2" type="button" value="注册" onclick="javascrtpt:window.location.href='zhuce.php'"/></td>
     </tr>
   </table>
</form>
</div>

<?php } else { ?>

<div class="div1" >
<table class="denglu">
  <tr><td><p><?php echo $_SESSION['user']."欢迎您";?></p></td></tr>
  <tr>
      <td><a href="certer.php">用户中心</a></td>
      <td><a href="sessdestory.php">安全退出</a></td>
  </tr>
  
  <tr>
      <td><a href="chat/tf.php" target="_Blank">若您需要可进入实时聊天室进行交流</a></td>
  </tr>
 
</table>
</div>

<?php } ?>

<div class="room1">
<p class="rfon1">【二手置换板块】</p>
<p style="font-weight:bold">『本版版规』</p>
<p>本版块禁止发布不健康内容或资源</p>
<p>禁止发布带有收费网盘、收费跳转、广告、邀请链接等违规内容</p>
<p>禁止帖子内容、图片及解压密码等出现其他网站地址</p>
<p>禁止发布无法阅读的高权限帖子</p>
</div >
</div>

<div class="send">
<?php
include("seconda.php");
?>
</div>


</body>
</html>