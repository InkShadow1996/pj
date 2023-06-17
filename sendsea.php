<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>发表帖子</title>
</head>

<body>
<?php  //发表帖子
session_start();
include("header.php");
?>

<style>

.sub{
text-align: center;
}

.but{
background-color: #B10707;
width: 90px;
height: 40px;
font-size: 15px;
color: white;
border: none;
}

#id{
width: 250px;
height: 25px;
}

.right{
margin-left: 10px;
}

.sh{
	margin-top:50px;
	margin-left:100px;
	margin-right:100px;
}
</style>

<div class="sh">
<script src="js/login.js" language="javascript"></script>
<form method="post" action="sendapost.php" name="sendapost">

 <table width="500px" border="1" cellpadding="8" cellspacing="0" align="center">
 
 <tr class="title">
 <td colspan="2">
 编辑帖子<span class="right">[<a style="color: white" href="secondhand.php">返回</a> ]</span>
 </td>
 </tr>
 
 <tr>
 <td width="100px">标题</td>
 <td><input type="text" name="titlea"  style="width:380px"></td>
 </tr>
 
 <!--指定文本域可见的宽度和高度，单位为字符-->
 <tr>
 <td width="100px">内容</td>
 <td><textarea cols="43" rows="15" name="contenta" id="texta"></textarea></td>
 </tr>
 
 <tr class="sub">
 <td colspan="2">
 <input type="submit" value="发布" class="but" id="dc" name="spa" onclick="return checkspa()">
 <input type="reset" value="重置" class="but" id="dc">
 </td>
 </tr>
 </table>


</form>
</div>
</body>
</html>