<?php /* Smarty version Smarty-3.1.16, created on 2014-02-23 13:03:35
         compiled from "main\templates\allnew.html" */ ?>
<?php /*%%SmartyHeaderCode:222125309efbfd608c2-33829363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db9e88fb74624c7d9cb90c94a989f3848aa39f4e' => 
    array (
      0 => 'main\\templates\\allnew.html',
      1 => 1393160611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222125309efbfd608c2-33829363',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5309efbfe54055_96326361',
  'variables' => 
  array (
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309efbfe54055_96326361')) {function content_5309efbfe54055_96326361($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script src="js/allnew.js"></script>
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
<a href="javascript:void(0);" onclick="allnew(0)">首页</a>&nbsp&nbsp
<a href="javascript:void(0);" onclick="allnew(-1)">
上一页</a>&nbsp&nbsp
<a href="javascript:void(0);" onclick="allnew(1)">
下一页</a>&nbsp&nbsp
<a href="javascript:void(0);" onclick="allnew('<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
')">
尾页</a></div>
<script>window.onload=allnew(0)</script>
</body>
</html><?php }} ?>
