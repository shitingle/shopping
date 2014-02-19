<?php
require_once 'system.smarty.inc.php';
require_once 'comm/opmysql.php';
$sql="select * from tb_commo";
$num=$db->fetch($sql);
$smarty->assign("id",$num["id"]);
$smarty->assign("name",$num["name"]);
$smarty->assign("class",$num["class"]);
$smarty->assign("model",$num["model"]);
$smarty->assign("brand",$num["brand"]);
$smarty->assign("area",$num["area"]);
$smarty->assign("stocks",$num["stocks"]);
$smarty->assign("sell",$num["sell"]);
$smarty->assign("price",$num["price"]);
$smarty->assign("addtime",$num["addtime"]);
$smarty->assign("v_price",$num["v_price"]);
$smarty->assign("m_price",$num["m_price"]);
$smarty->display("allnom.html");