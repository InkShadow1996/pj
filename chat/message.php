<?php 
session_start();
include("../conn/conn.php");
$furl=getenv("http_referer");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
<?php 
$message = $_POST['message'];
$select2 = $_POST['select2'];
$color = $_POST['color'];
$username = $_SESSION['user'];
$sql = "select * from chat_member where chat_user='$username'";
$result = mysql_query($sql);
$num = mysql_num_rows($result);
$ip = $_SERVER['REMOTE_ADDR'];
$dt = date("Y-m-d H:i:s");  
if($username!=""){ 
   if($select2=="所有人"){      //如果是对所有人说时，把下面的值插入到数据库
       $query="insert into chat_message (touser,fromuser,mtime,from_mess,color)values('所有人','$username', '$dt','$message','$color')";
                
           }else{      //如果是对单个人"$select2"说,则插入下面的值
             $query="insert into chat_message (touser,fromuser,mtime,from_mess,color)values('$select2','$username','$dt', '$message','$color')"; }
            $result=mysql_query($query); 
         echo "<meta http-equiv=\"Refresh\" content=\"0;url=content.php\">";
              } else{
                echo "请重新登录！！";
				  }
?>
</body>
</html>