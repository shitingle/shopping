<?php /* Smarty version Smarty-3.1.16, created on 2014-02-22 07:24:14
         compiled from "main\templates\myshopcar.html" */ ?>
<?php /*%%SmartyHeaderCode:3320530619cdcd25e0-63895482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aff87aa15559e3dd0a92d4d0656fe98facd1bda5' => 
    array (
      0 => 'main\\templates\\myshopcar.html',
      1 => 1393053818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3320530619cdcd25e0-63895482',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530619cddeddb9_59901262',
  'variables' => 
  array (
    'commar' => 0,
    'item' => 0,
    'key' => 0,
    'sum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530619cddeddb9_59901262')) {function content_530619cddeddb9_59901262($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<script src="js/myshopcar.js"></script>
我的购物车
<form id="myshopcar" name="myshopcar" method="post" action="">
<table width="850" height="179" >
  <tr>
    <th width="173" scope="col" colspan="2">商品名称</th>
    <th width="88" scope="col">购买数量</th>
    <th width="109" scope="col">市场价格</th>
    <th width="123" scope="col">会员价格</th>
    <th width="95" scope="col">折扣率</th>
    <th width="135" scope="col">合计</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['commar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
  <tr>
  <td><input id="chk" name="chk[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></td>
  <td><div>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div></td>
  <td align="center"><input id="cnum<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="cnum<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="text" class="shorttxt" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['num'];?>
"
  onkeyup="cvp(<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
),{}"></td>
  <td height="25" align="center"  class="center">
  <div id="m_price<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['m_price'];?>
</div></td>
  <td height="25" align="center"  class="center">
  <div>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['v_price'];?>
</div></td>
  <td height="25" align="center"  class="center">
  <div>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['fold'];?>
</div></td>
  <td height="25" align="center" class="right">
  <div>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</div></td></tr>
  <?php } ?>
  <tr>
  <td height="25" colspan="3" align="left">
  <a href="javascript:void(0)" onclick="return alldel();">全选</a>
  <a href="javascript:void(0)" onclick="return overdel();">反选</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="button" value="删除选择" onclick="del();">&nbsp&nbsp</td>
  <td height="25" align="center"><input id="cont" name="cont" value="继续购物" type="button"
  onclick="return del(myshopcar)"></td>
  <td><input id="uid" name="uid" type="hidden" value="<?php echo $_SESSION['member'];?>
">
  <input id="settle" name="settle" type="button" class="btn" value="去收银台" onclick="return formset(form)"></td>
  <td height="25" colspan="2" align="right"><div id="sum">共计:<?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
&nbsp;元</div></td></tr>
</table>
</form>

</body>
</html><?php }} ?>
