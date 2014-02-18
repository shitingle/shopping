<?php
header("content/type:image/png");
session_start();
$text=rand(1000,10000);
$_SESSION['code']=$text;
$im=imagecreate(80,30);
$bg=imagecolorallocate($im,rand(200,255),rand(200,255),rand(200,255));
$color=imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
imagestring($im,5,10,2,$text,$color);
for($i=0;$i<200;$i++){
	$randcolor=imagecolorallocate($im,rand(200,255),rand(200,250),rand(200,250));
	imagesetpixel($im,rand()%70,rand()%20,$randcolor);
}
imagepng($im);
imagedestroy($im);

?>