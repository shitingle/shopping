<?php
require_once 'system.smarty.inc.php';
require_once 'comm/opmysql.php';
session_start();
$name=$_GET['uname'];
$pwd=$_GET['pwd'];
$sql="select * from tb_user where name='{$name}' and password='{$pwd}'";
$num=$db->fetch($sql);
if($num){
	$_SESSION['member']=$name;
	echo "<script>this.location.replace('http://localhost/shopping/info.php');</script>";
}else{
	echo "µÇÂ½Ê§°Ü";
}