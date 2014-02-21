<?php
require_once 'system.smarty.inc.php';
require_once 'comm/opmysql.php';
header("Content-Type:text/html;charset=utf-8");
$sql="select * from tb_commo";
$result=$db->select($sql);
$page_count=$result;
$count=ceil($page_count/6);
$smarty->assign("count",$count);
?>