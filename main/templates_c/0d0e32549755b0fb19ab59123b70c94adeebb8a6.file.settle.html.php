<?php /* Smarty version Smarty-3.1.16, created on 2014-02-23 13:44:11
         compiled from "main\templates\settle.html" */ ?>
<?php /*%%SmartyHeaderCode:100445309fb177ac1e0-98384821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d0e32549755b0fb19ab59123b70c94adeebb8a6' => 
    array (
      0 => 'main\\templates\\settle.html',
      1 => 1393163050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100445309fb177ac1e0-98384821',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5309fb178a0a14_50557240',
  'variables' => 
  array (
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309fb178a0a14_50557240')) {function content_5309fb178a0a14_50557240($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script src="js/settle.js"></script>
</head>
<style>
.img img{
    height:200px;
	width:150px;
}
li.product_list{
	float:left;
	padding-left:40px;
	padding-bottom:50px;
	list-style:none;
}
.clear{
	clear:both;
}
.intro_text{
	width:200px;
}
</style>

<body>

<div id="page_count"></div><div class="clear"></div>
<div class="pages">
页数：<label id="page_f">1</label>/<label id="page_t"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</label>&nbsp&nbsp&nbsp&nbsp
<a href="javascript:void(0);" onclick="settle(0)">首页</a>&nbsp&nbsp
<a href="javascript:void(0);" onclick="settle(-1)">
上一页</a>&nbsp&nbsp
<a href="javascript:void(0);" onclick="settle(1)">
下一页</a>&nbsp&nbsp
<a href="javascript:void(0);" onclick="settle('<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
')">
尾页</a></div>
<script>window.onload=settle(0)</script>
</body>
</html><?php }} ?>
