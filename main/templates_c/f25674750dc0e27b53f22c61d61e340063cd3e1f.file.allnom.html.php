<?php /* Smarty version Smarty-3.1.16, created on 2014-02-22 07:45:46
         compiled from "main\templates\allnom.html" */ ?>
<?php /*%%SmartyHeaderCode:3262253075cdf8ce350-16015106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f25674750dc0e27b53f22c61d61e340063cd3e1f' => 
    array (
      0 => 'main\\templates\\allnom.html',
      1 => 1393055145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3262253075cdf8ce350-16015106',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53075cdfaaf813_29251901',
  'variables' => 
  array (
    'name' => 0,
    'pics' => 0,
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
<?php if ($_valid && !is_callable('content_53075cdfaaf813_29251901')) {function content_53075cdfaaf813_29251901($_smarty_tpl) {?><h1>商品详细信息</h1>
<table width="636" id="allnom" align="center" cellspacing="0" cellpadding="0">
<tr>
<td height="33" align="center" valign="middle" >商品名称:<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
</tr>
<tr>
<td height="132" align="left" valign="middle">
<table width="722" height="134"  cellspacing="0" cellpadding="0">
<tr>
<td width="258" rowspan="5" align="center" valign="middle></td>
<td height="35"><img src="image/<?php echo $_smarty_tpl->tpl_vars['pics']->value;?>
" width="247" height="130" /></td>
<td width="207" height="35">商品类别:<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
</td>
<td width="255">商品型号:<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
</td>
</tr>
<tr>
<td height="23">商品品牌:<?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
</td>
<td height="23" colspan="2">商品产地:<?php echo $_smarty_tpl->tpl_vars['area']->value;?>
</td></tr>
<tr>
<td width="207" height="32">剩余数量:<?php echo $_smarty_tpl->tpl_vars['stocks']->value;?>
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
<td height="30" colspan="2" align="center" valign="middle">&nbsp;</td>
</tr>
</table></td>
</tr></table>

<input id="allshow" name="allshow" type="button" value="show" class="show info" onclick="openshowcommo('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')" />
<input id="buy" name="buy" type="button" value="buy" class="buy" onclick="buycommo('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')" /><?php }} ?>
