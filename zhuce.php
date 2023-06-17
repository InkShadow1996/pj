<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎注册</title>
<link href="css/text.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php
include("header.php");
?>

<div>
<div id="zcborder">
<script src="js/text.js" language="javascript"></script>
<script src="ajax/ajaxRequest.js" language="javascript"></script>
<form name="zc" method="POST" action="zhuce_del.php" onsubmit="return checkform() ">
<table class="zhuce" >
  <tr valign="middle" align="center">
      <td class="zct1" >用户名：
          <br />
          <a href="#" onclick=" return testname()";>用户名查重</a>
      </td>
      <td class="zct2" ><input name="zcuser" id="zcuser" type="text" value="" size="13" maxlength="100" style="width:200px" onblur="checkuser()"/>
      <br />
                        <span id="zcu"></span>
      </td>
  </tr>
  
  <tr valign="middle" align="center">
      <td class="zct1">密码:</td>
      <td class="zct2"><input name="zcpwd1" id="zcpwd1" type="password" value="" size="13" maxlength="100" style="width:200px" onblur="checkpwda()"/>
      <br />
                       <span id="zcp1"></span>
      </td>
  </tr>
  
  <tr valign="middle" align="center">
      <td class="zct1">请再次输入密码：</td>
      <td class="zct2"><input name="zcpwd2" id="zcpwd2" type="password" value="" size="13" maxlength="100" style="width:200px" onblur="checkpwdb()"/>
      <br />
                       <span id="zcp2"></span>
      </td>
      <div>
  </tr>
  
  <tr valign="middle" align="center">
      <td class="zct1">邮箱：</td>
      <td class="zct2"><input name="email" id="email" type="text" value="" size="13" maxlength="100" style="width:200px" onblur="checkemail()"/>
      <br />
                       <span id="ema"></span>      
      </td>
  </tr>
  
  <tr valign="middle" align="center">
      <td class="zct1">身份证号：</td>
      <td class="zct2"><input name="cardID" id="cardID" type="text" value="" size="13" maxlength="100" style="width:200px" onblur="checkcard()" />
      <br />
                       <span id="card"></span>
      </td>
  </tr>
  
  <tr valign="middle" align="center">
     <td colspan="2"><input name="zctj" type="submit" value="提交" onclick=" return check()" /></td>
  </tr>
</table>
</form>
<!-- onclick先进行非空等格式的检查，onsubmit执行正则表达式检查，onclick先于onsubmit执行-->;
</div>
</div>
</body>
</html>