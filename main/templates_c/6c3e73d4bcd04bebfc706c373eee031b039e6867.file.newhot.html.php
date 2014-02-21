<?php /* Smarty version Smarty-3.1.16, created on 2014-02-20 15:15:04
         compiled from "main\templates\newhot.html" */ ?>
<?php /*%%SmartyHeaderCode:2325253061bf8cbd4e9-36480719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c3e73d4bcd04bebfc706c373eee031b039e6867' => 
    array (
      0 => 'main\\templates\\newhot.html',
      1 => 1392906373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2325253061bf8cbd4e9-36480719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53061bf8d03b78_19968557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53061bf8d03b78_19968557')) {function content_53061bf8d03b78_19968557($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script src="js/page.js"></script>
<script src="js/shopcar.js"></script>
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
<div>
页数：<label id="page_f">1</label>/<label id="page_t"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</label>&nbsp&nbsp&nbsp&nbsp
<a href="javascript:void(0);" onclick="ajax(0)">首页</a>&nbsp&nbsp
<a href="javascript:void(0);" onclick="ajax(-1)">
上一页</a>&nbsp&nbsp
<a href="javascript:void(0);" onclick="ajax(1)">
下一页</a>&nbsp&nbsp
<a href="javascript:void(0);" onclick="ajax('<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
')">
尾页</a></div>
<script>window.onload=ajax(0)</script>
</body>
</html><?php }} ?>
