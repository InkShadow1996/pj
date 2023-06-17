<?php                     /*标题画布*/
header("content-type:image/jpeg");
$im = imagecreatefromjpeg("pictures/p2.jpg");
$textcolor = imagecolorallocate($im,0,38,54);
$fnt = "D:/PHP/AppServ/www/fonts/zhuanshitianxin.TTF";
//$motto = iconv_strlen("gb2312","utf-8","生态园-蓝色康桥社区欢迎您");
imageTTFText($im,150,0,170,230,$textcolor,"$fnt","生态园-蓝色康桥社区欢迎您");
imagejpeg($im);
imagedestroy($im);
echo '<br>';
?>