<?php /* Smarty version Smarty-3.1.16, created on 2014-02-23 13:30:49
         compiled from "main\templates\allhot.html" */ ?>
<?php /*%%SmartyHeaderCode:198675309f70a5da437-08982461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81b73e5df0c11a2298e28c0cc9898f0e84d98b02' => 
    array (
      0 => 'main\\templates\\allhot.html',
      1 => 1393162248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198675309f70a5da437-08982461',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5309f70a6d87d0_29719164',
  'variables' => 
  array (
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309f70a6d87d0_29719164')) {function content_5309f70a6d87d0_29719164($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script src="js/allhot.js"></script>
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
<a href="javascript:void(0);" onclick="allhot(0)">首页</a>&nbsp&nbsp
<a href="javascript:void(0);" onclick="allhot(-1)">
上一页</a>&nbsp&nbsp
<a href="javascript:void(0);" onclick="allhot(1)">
下一页</a>&nbsp&nbsp
<a href="javascript:void(0);" onclick="allhot('<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
')">
尾页</a></div>
<script>window.onload=allhot(0)</script>
</body>
</html><?php }} ?>
