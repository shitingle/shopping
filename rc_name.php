<?php
require_once 'comm/opmysql.php';
$name=$_GET['name'];
$sql="select * from tb_user where name='{$name}'";
$num=$db->fetch($sql);
if($num==null){
	echo "用户名输入错误";
}else{
	echo "&nbsp";
}
