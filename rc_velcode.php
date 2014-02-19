<?php
session_start();
$code=$_GET['code'];
if($code!=$_SESSION['code']){
	echo "验证码错误";
}else{
	echo "&nbsp";
}
?>