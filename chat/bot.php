<?php 
session_start();
include("../conn/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
<script language="javascript">
function checkmessage(){
    if(msgform.message.value==""){
        alert("发言内容不能为空");
        msgform.message.focus();
        return false;  
	}
    msgform.message.focus();
    return true; 
}
</script>
<style type="text/css">

body,td,th {
color: #000000;
}
body {
background-color: #EFF3FF;
margin-left: 0px;
margin-top: 0px;
margin-right: 0px;
margin-bottom: 0px;
}
.style1 {
color: #000000;
font-size: 13px;
}

</style>
<body><center>
<table width="990" border="0" cellpadding="0" cellspacing="0">
    <tr><!--enctype="multipart/form-data" 不对字符进行编码，使用文件上传时必须使用该属性  target在指定框架打开action url-->
      <td width="901" align="center" valign="top"><form action="message.php" method="post" enctype="multipart/form-data" name="msgform" target="contentFrame" onSubmit="return checkmessage()">
<input type="hidden" name="username" id="username" value="<?php echo $_SESSION[user];?>">          
<span class="style1">聊天对象:
          <select name="select2" size="1">
            <option>所有人</option>
            <?php 
           $sql="select * from chat_member where chat_user!='$_SESSION[user]' order by online_id desc"; 
           $result=mysql_query($sql);
           while($row=mysql_fetch_array($result)){ ?>
            <option><?php echo $row[chat_user];?></option>
            <?php }?>
          </select>
          发言:</span>        
        <input type="text" name="message" maxlength="120" size="50">
        <p>    <span class="style1">字体颜色:
            <select name="color" size="1">
              <option value="#ff0000">红</option>
              <option value="#ffff00">黄</option>
              <option value="#0000ff">蓝</option>
              <option value="#80080">紫</option>
              <option value="#008000">绿</option>
              <option value="#00cc00">青</option>
              <option value="#ffffff">白</option>
            </select>

</p>
  <p align="center"><span class="style1">聊天方式:</span>    
    <input name="submit" type="submit" value="提交" onClick="window.location.href='b.php'"> 
  </p>
      </form></td>
    </tr>
  </table>
</center>
</body>
</html>