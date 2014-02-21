<?php /* Smarty version Smarty-3.1.16, created on 2014-02-20 15:15:04
         compiled from "main\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1772953061bf8b8dd82-60154247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f139dd038aacb3cb42a533e545fed71303f33a3' => 
    array (
      0 => 'main\\templates\\login.html',
      1 => 1392880905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1772953061bf8b8dd82-60154247',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53061bf8b9ba64_33267785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53061bf8b9ba64_33267785')) {function content_53061bf8b9ba64_33267785($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<script src="js/login.js"></script>
<body>
<form action="checkpwd.php" method="GET" onsubmit="return check()">
<div id="check" style="border:2px">
<div>用户登陆</div>
<div>用户名:<input type="text" name="uname" id="uname" onblur="checkuname()"></div>
<div><label id="tname">&nbsp</label></div>
<div>密码:<input type="password" name="pwd" id="upwd" onblur="checkpwd()"></div>
<div><label id="tpwd">&nbsp</label></div>
<div>验证码:<input type="text" name ="verify" id="verify" onblur="checkverify()"></div>
<div><label id="tverify">&nbsp</label></div>
<div><img src="velcode.php" onclick="show()" id="myimg">
<a href="javascript:void(0)" onclick="show()">换一张</a></div>
<!-- 
<div><a href="javascript:void(0)" onclick="check()">登陆</a><a href="register.php">注册</a></div>
 -->
 <div><label id="checkuser"></label></div>
 <div>
<input type="submit" value="提交" >
 
 <a href="register.php">注册</a></div>
</div>
</form>
<script>
function show(){
	document.getElementById("myimg").src="velcode.php";
}
</script>
</body>
</html><?php }} ?>
