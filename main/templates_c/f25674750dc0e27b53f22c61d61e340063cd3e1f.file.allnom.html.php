<?php /* Smarty version Smarty-3.1.16, created on 2014-02-19 03:00:50
         compiled from "main\templates\allnom.html" */ ?>
<?php /*%%SmartyHeaderCode:2528953041424518457-93166718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f25674750dc0e27b53f22c61d61e340063cd3e1f' => 
    array (
      0 => 'main\\templates\\allnom.html',
      1 => 1392778849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2528953041424518457-93166718',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530414245c6204_45305341',
  'variables' => 
  array (
    'name' => 0,
    'class' => 0,
    'model' => 0,
    'brand' => 0,
    'area' => 0,
    'stocks' => 0,
    'sell' => 0,
    'm_price' => 0,
    'addtime' => 0,
    'v_price' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530414245c6204_45305341')) {function content_530414245c6204_45305341($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<table width="636" border="1" align="center" cellspacing="0" cellpadding="0">
<tr>
<td height="33" align="left" valign="middle" ></td>
</tr>
<tr>
<td height="132" align="left" valign="middle">
<table width="636" height="134" border="1" cellspacing="0" cellpadding="0">
<tr>
<td width="145" rowspan="5" align="center" valign="middle></td>
<td height="35">商品名称:<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
<td width="156" height="35">商品类别:<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
</td>
<td width="157">商品型号:<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
</td>
</tr>
<tr>
<td height="23">商品品牌:<?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
</td>
<td height="23" colspan="2">商品产地:<?php echo $_smarty_tpl->tpl_vars['area']->value;?>
</td></tr>
<tr>
<td width="178" height="32">剩余数量:<?php echo $_smarty_tpl->tpl_vars['stocks']->value;?>
</td>
<td colspan="2">销售数量:<?php echo $_smarty_tpl->tpl_vars['sell']->value;?>
</td></tr>
<tr>
<td height="23">市场价:<?php echo $_smarty_tpl->tpl_vars['m_price']->value;?>
</td>
<td height="23">上市日期:<?php echo $_smarty_tpl->tpl_vars['addtime']->value;?>
</td></tr>
<tr><td height="30">会员价格:<?php echo $_smarty_tpl->tpl_vars['v_price']->value;?>
</td>
<td height="30" colspan="2" align="center" valign="middle">
<input id="allshow" name="allshow" type="button" value="show" class="show info" onclick="openshowcommo('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')">
<input id="buy" name="buy" type="button" value="buy" class="buy" onclick="buycommo('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')"></td>
</tr>
</table></td>
</tr></table>
</body>
</html><?php }} ?>
