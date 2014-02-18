<?php /* Smarty version Smarty-3.1.16, created on 2014-02-14 10:03:25
         compiled from "main\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1964152fc921b08afa7-30746712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f139dd038aacb3cb42a533e545fed71303f33a3' => 
    array (
      0 => 'main\\templates\\login.html',
      1 => 1392371993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1964152fc921b08afa7-30746712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fc921b191071_55061635',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fc921b191071_55061635')) {function content_52fc921b191071_55061635($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<script src="js/login.js"></script>
<body>
<form action="checkpwd.php" method="get">
<div>用户名:<input type="text" name="uname" id="uname" onblur="checkuname()"><label id="tname"></label></div>
<div>密码:<input type="password" name="pwd" id="upwd" onblur="checkpwd()"><label id="tpwd"></label></div>
<div>验证码:<input type="text" name ="verify" id="verify" onblur="checkverify()"><label id="tverify"></label></div>
<div><img src="velcode.php" onclick="show()" id="myimg">
<a href="javascript:void(0)" onclick="show()">换一张</a></div>
<div><input type="submit" value="登陆"><a href="register.php">注册</a></div>
</form>
<script>
function show(){
	document.getElementById("myimg").src="velcode.php";
}
</script>
</body>
</html><?php }} ?>
