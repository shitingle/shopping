<?php 
require_once 'comm/opmysql.php';
$uname=$_GET['uname'];
$sql="select name from tb_user where name='{$uname}'";
$num=$db->fetch($sql);
if(empty($num)){
	echo "用户名可用";
}else{
	echo "用户名已被占用";
}


?>