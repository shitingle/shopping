<?php
require_once 'system.smarty.inc.php';
require_once 'comm/opmysql.php';
session_start();
echo $_SESSION['member'];
$sql="select id,shopping from tb_user where name='{$_SESSION['member']}'";
$num=$db->fetch_all($sql);
if(empty($num)){
	echo "<script>alert('购物车中暂时没有商品');window.location.href='http://localhost/shopping/index.php';</script>";
}
$commar=array();
foreach ($num[0] as $value){
	$tmpbum=explode('@',$value);
	$shopnum=count($tmpbum);
	$sum=0;
	foreach ($tmpbum as $key=>$v1){
		$s_comm=explode(',',$v1);
		
		$sql="select id,name,m_price,fold,v_price from tb_commo where id='{$s_comm[0]}'";
		$arr=$db->fetch($sql);
		$arr['num']=$s_comm[1];
		$arr['total']=$s_comm[1]*$arr['v_price'];
		$sum+=$arr['total'];
		$commar[$key]=$arr;
		
	}
}
$smarty->assign('shoparr',$shopnum);
$smarty->assign('sum',$sum);
$smarty->assign('commar',$commar);
