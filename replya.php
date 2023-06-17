<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>回复主题</title>

</head>

<body>

<?php
include("header.php");
$ida = $_GET['senda_id'];

$sub = $_GET['senda_subject'];
/*echo "<script type='text/javascript'>alert('$sub');</script>";*/
?>
 <style>
 
.rep{
	margin-top:100px;
	margin-right:100px;
	margin-left:100px;
 }
.title{
background-color: #B10707;
color: white;
}
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
</style>

<script src="js/login.js" language="javascript"></script>
<div class="rep">
<form method="post" action="replya_post.php?senda_id=<?php echo $_GET['senda_id']; ?>"  name="myforma">

 <table width="500px" border="1" cellpadding="8" cellspacing="0" align="center">
 <tr class="title">
 <td colspan="2">
 回复帖子<span class="right">[<a style="color: white" href="tiezia.php?senda_id=<?php echo $ida?>&senda_subject=<?php echo $sub?>">返回</a> ]</span>
</td>
</tr>
 <tr>
 <tr>
 <td width="100px">回复内容</td>
 <td><textarea cols="43" rows="10" name="replya"></textarea></td>
 </tr>
 <tr class="sub">
 <td colspan="2">
 <input type="submit" value="快速回复" class="but" onclick="return checkreplya()" id="in">
 <input type="reset" value="重置" class="but" id="in">
 </td>

 </tr>
 </table>


 </form>
</div>
</body>
</html>