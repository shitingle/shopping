<?php  
require_once 'comm/opmysql.php';
$page=$_GET['page'];
$page_f=($page-1)*6;
$page_n=2;
$sql="select * from tb_commo where isnom='1' limit $page_f,6";
$num=$db->fetch_all($sql);

echo "<ul id ='products'>";
foreach ($num as $num){
	//1.id $num[id]
	//2.database id all data
	//3.array
	//4.output arr[img_src]

	$sql='select * from tb_commo where id ='.$num['id'].'';
	$arr=$db->fetch($sql);
	 
	echo "<li class='product_list'>
	<div class='img'>
	<img src='image/{$arr['pics']}'>
	</div>
	<div class='intro_text'>
	<a href='#' title='{$arr['name']}'>{$arr[name]}</a>
	</div>
	<div>{$arr['info']}</div>
			<div class='price'>
			".$arr['m_price']."
			</div>
	<div><a href='javascript:void(0)' onclick='shopcar({$arr[id]})'>加入购物车</a>&nbsp&nbsp
	<a href='index.php?num={$arr[id]}&page=nom'>查看详细信息</a></div>
	</li>";}
	echo "</ul><div class='clear'></div>";
