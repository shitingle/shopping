<?php /* Smarty version Smarty-3.1.16, created on 2014-02-23 12:23:15
         compiled from "main\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1772953061bf8b8dd82-60154247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f139dd038aacb3cb42a533e545fed71303f33a3' => 
    array (
      0 => 'main\\templates\\login.html',
      1 => 1393157938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1772953061bf8b8dd82-60154247',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53061bf8b9ba64_33267785',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53061bf8b9ba64_33267785')) {function content_53061bf8b9ba64_33267785($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<script src="js/login.js"></script>
<body>

<div id="check">

<div class="login-title">用户登陆</div>
	<div class="login-form">
<div>用户名:<input type="text" name="uname" id="uname" onblur="checkuname()"></div>
<div><label id="tname">&nbsp</label></div>
<div>密码&nbsp;&nbsp;:<input type="password" name="pwd" id="upwd" onblur="checkpwd()"></div>
<div><label id="tpwd">&nbsp</label></div>
<div>验证码:<input type="text" name ="verify" id="verify" onblur="checkverify()"></div>
<div><label id="tverify">&nbsp</label></div>
<div><img src="velcode.php" onclick="show()" id="imgcode">
<a href="javascript:void(0)" onclick="show()">换一张</a></div>
 <div><label id="checkuser"></label></div>
 <div>
<a href="index.php"  onclick="return check()">提交</a>
 <a href="register.php">注册</a></div>
</div>
</div>
<script>
function show(){
	document.getElementById("imgcode").src="velcode.php?id="+Math.random()*100;
}
</script>
</body>
</html><?php }} ?>
