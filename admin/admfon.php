<?php
 header("Content-type: image/jpeg"); 
  
// Create the image 
$im = imagecreatetruecolor(400, 100); 
  
// Create some colors 
$white = imagecolorallocate($im, 255, 255, 255); 
$grey = imagecolorallocate($im, 128, 128, 128); 
$black = imagecolorallocate($im, 0, 0, 0); 
imagefilledrectangle($im, 0, 0, 399, 100, $white); 
  
// The text to draw 
$text = '字典网'; 
// Replace path by your own font path 
$font = "D:/PHP/AppServ/www/fonts/zhuanshitianxin.TTF";
  
// Add some shadow to the text 
//imagettftext($im, 60, 0, 11, 21, $grey, $font, $text); 
  
// Add the text 
imagettftext($im, 60, 0, 0, 70, $black, $font, $text); 
  
// Using imagepng() results in clearer text compared with imagejpeg() 
imagepng($im); 
imagedestroy($im); 
?>