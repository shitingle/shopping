<?php 
session_start();
header("Content-type:text/html;charset=UTF-8");
require_once 'comm/opmysql.php';
if(empty($_SESSION['member'])){
	$reback=2;
    }else{
		$mid=$_GET['mid'];
	if($mid==""){
		$reback=5;
	}else{
		$boo=false;
		$sql="select shopping from tb_user where name='{$_SESSION['member']}'";
		$num=$db->fetch($sql);
		$shop=$num[shopping];
		if(!empty($num[shopping])){
			$arr=explode('@',$num[shopping]);
			foreach($arr as $value){
				$arrtmp=explode(',',$value);
				if($mid==$arrtmp[0]){
					$reback=3;
					$boo=true;
				}
			}
			if($boo==false){
				$shop.='@'.$mid.',1';
				$sql="update tb_user set shopping='{$shop}' where name='{$_SESSION[member]}'";
				$numm=$db->fetch($sql);
				if($numm){
					$reback=1;
				}else{
					$reback=4;
				}
			}
			}else{
				$shop=$mid.",1";
				$sql="update tb_user set shopping='{$shop}' where name='{$_SESSION[member]}'";
				$numm=$db->fetch($sql);
				if($numm){
					$reback=1;
				}else{
					$reback=4;
				}
				
			}
	}
		
	}
echo $reback;
?>