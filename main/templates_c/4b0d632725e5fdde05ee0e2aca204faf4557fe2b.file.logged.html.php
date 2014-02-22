<?php /* Smarty version Smarty-3.1.16, created on 2014-02-22 07:19:21
         compiled from "main\templates\logged.html" */ ?>
<?php /*%%SmartyHeaderCode:105595307656d604377-44750757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b0d632725e5fdde05ee0e2aca204faf4557fe2b' => 
    array (
      0 => 'main\\templates\\logged.html',
      1 => 1393053559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105595307656d604377-44750757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5307656d6c9d90_71094845',
  'variables' => 
  array (
    'member' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5307656d6c9d90_71094845')) {function content_5307656d6c9d90_71094845($_smarty_tpl) {?><div class="user_info">
欢迎您:<?php echo $_smarty_tpl->tpl_vars['member']->value;?>
<br>
<div class="info_content">
		<a href='',id='info'></a>
		<a href='http://localhost/shopping/index.php?page=shopcar'>购物车</a>
		<a href=''>会员中心</a>
		<a href='http://localhost/shopping/logout.php'>安全退出</a>
	</div>
</div><?php }} ?>
