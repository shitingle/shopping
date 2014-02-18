<?php /* Smarty version Smarty-3.1.16, created on 2014-02-18 08:38:34
         compiled from "main\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1496053030bd1acabd1-71345818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79ea9ce4baa1bd60c508046b7780402848d1b429' => 
    array (
      0 => 'main\\templates\\index.html',
      1 => 1392712712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1496053030bd1acabd1-71345818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53030bd1c43ef6_83754058',
  'variables' => 
  array (
    'hello' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53030bd1c43ef6_83754058')) {function content_53030bd1c43ef6_83754058($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<table width="850" border="1" cellspacing="0" cellpadding="0">
<tr>
<td colspan="2"><?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</td>
</tr>
<tr>
<td width="216" align="left" valign="top">
<?php echo $_smarty_tpl->getSubTemplate ("login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("public.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("links.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</td>
<td width="634" height="700" align="center" valign="top">
<?php echo $_smarty_tpl->tpl_vars['hello']->value;?>

</td>
</tr></table>


<table width="850" border="1" cellspacing="0" cellpadding="0">
<tr><td><?php echo $_smarty_tpl->getSubTemplate ("button.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['hello']->value;?>
</td></tr>

</table>
</body>
</html><?php }} ?>
