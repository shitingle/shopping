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
	$member=$_SESSION['member'];
	echo "欢迎您:{$member}<br>
	        <a href='',id='info'>会员中心</a><br>
			<a href=''>查看购物车</a><br>
		    <a href=''>安全离开</a>";
}else{
	echo "��½ʧ��";
}