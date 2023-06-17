<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎来到生态园-蓝色康桥社区</title>
<link href="css/text.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="back">
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
 
</table>
</div>

<?php } ?>

<div class="div3">
<video width="500px" height="280px" controls="controls">
  <source src="movie/123.mp4" type="video/mp4" />
  <source src="movie/123.ogg" type="video/ogg" />
  <source src="movie/123.webm" type="video/webm" />
  <object data="movie/123.mp4" width="500px" height="280px">
    <embed src="movie/123.swf" width="500px" height="280px" />
  </object>
</video>
</div>

<div class="div4">
<table class="div4t" rules="all">
<tr>
    <td align="center" valign="middle" height="70px"><p style="font-size:18px; font-weight:bold;">物业公告</p></td>
</tr>
<?php include("wyggecho.php"); ?>
</table>
</div>
</div>

<div class="div2">
<a href="https://2.taobao.com/"><img src="pictures/xianyu.jpg" width="200px" height="200px"/></a>
<p>喜欢二手版块的朋友可前往闲鱼 自行交易</p>
</div>

<div class="div5">
<table class="div5t">
  <tr>
     <td width="400px" height="60px" style="font-weight:bold"><p>房屋租售</p></td>
     <td width="100px" height="60px"><a href="roomsale.php">more</a></td>
  </tr>
<?php include("roomsaleecho.php"); ?>
</table>
</div>

<div class="div6">
<table class="div6t">
<tr>
    <td width="400px" height="60px" style="font-weight:bold"><p>二手信息</p></td>
    <td width="100px" height="60px"><a href="secondhand.php">more</a></td>
</tr>
<?php include("secondhandecho.php"); ?>
</table>
</div>

</div>

</body>
</html>