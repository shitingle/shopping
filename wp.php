<?php
include_once 'comm/opmysql.php';
$name=$_GET['name'];
$pics=$_GET['pics'];
$info=$_GET['info'];
$addtime=$_GET['addtime'];
$area=$_GET['area'];
$model=$_GET['model'];
$class=$_GET['class'];
$brand=$_GET['brand'];
$stock=$_GET['stock'];
$sell=$_GET['sell'];
$m_price=$_GET['m_price'];
$v_price=$_GET['v_price'];
$isnew=$_GET['isnew'];
$isnom=$_GET['isnom'];
$sql="insert into tb_commo(name,pics,info,addtime,area,model,class,brand,stock,sell,m_price,v_price,isnew,isnom) 
		values('{$name}','{$pics}','{$info}','{$addtime}','{$area}','{$model}','{$class}','{$brand}','{$stock}','{$sell}','{$m_price}',
'{$v_price}','{$isnew}','{$isnom}')";
$num=$db->exec($sql);
?>