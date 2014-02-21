<?php
require_once 'comm/opmysql.php';
session_start();
$rm=$_GET['rd'];
$rd=explode(',',$rm);
$sql="select shopping from tb_user where name='{$_SESSION['member']}'";
$num=$db->fetch($sql);
$tem=array();
$arr=explode('@',$num[shopping]);
foreach($arr as $key=>$v1){
	$s_comm=explode(',',$v1);
	$tem[$key]['id']=$s_comm[0];
	$tem[$key]['num']=$s_comm[1];
}
for($i=0;$i<=count($rd)-1;$i++){
    for($j=0;$j<=count($tem);$j++){
    	if($tem[$j]['id']==$rd[$i]){
    		unset($tem[$j]);	
    	}
    }
}
if($tem!==""){
foreach ($tem as $key=>$v1){
	$temm[$key]=implode(',',$v1);
}}else{
	echo 1;
}
$im=implode('@',$temm);
$sql="update tb_user set shopping='{$im}' where name='{$_SESSION['member']}' ";
$numm=$db->exec($sql);
if(!empty($numm)){
	echo 1;
}