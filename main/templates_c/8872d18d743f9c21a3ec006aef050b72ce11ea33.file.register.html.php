<?php /* Smarty version Smarty-3.1.16, created on 2014-02-22 08:05:27
         compiled from "main\templates\register.html" */ ?>
<?php /*%%SmartyHeaderCode:2297253085a47eb70f9-82774464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8872d18d743f9c21a3ec006aef050b72ce11ea33' => 
    array (
      0 => 'main\\templates\\register.html',
      1 => 1392361356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2297253085a47eb70f9-82774464',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53085a4803cfa6_08622891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53085a4803cfa6_08622891')) {function content_53085a4803cfa6_08622891($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script src="js/register.js"> </script>
</head>
<body><form action="register_chk.php" method="GET">
<div>新用户注册</div>
<div>注册名:<input type="text" id="name" name="uname" onblur="ckname()">
<label id="rgname"></label></div>
<div>注册密码:<input type="password" id="pwd" name="pwd" onblur="ckpwd()">
<label id="rgpwd"></label></div>
<div>确认密码:<input type="password" id="rpwd" name="repassword" onblur="dckpwd()">
<label id="rgrpwd"></label></div>
<div>密保问题1:
<select name="question1">
<option>你父亲的姓名?</option>
<option>你母亲的姓名?</option>
<option>你的生日?</option>
<option>你的出生地?</option></select></div>
<div>密保答案:<input type="text" id="answer1" name="answer1" onblur="ckanswer1()">
<label id="tanswer1"></label></div>
<div>密保问题2:
<select name="question2">
<option>你父亲的姓名?</option>
<option>你母亲的姓名?</option>
<option>你的生日?</option>
<option>你的出生地?</option></select></div>
<div>密保答案:<input type="text" id="answer2" name="answer2" onblur="chanswer2()">
<label id="tanswer2"></label></div>
<div>密保问题3:
<select name="question3">
<option>你父亲的姓名?</option>
<option>你母亲的姓名?</option>
<option>你的生日?</option>
<option>你的出生地?</option></select></div>
<div>密保答案:<input type="text" id="answer3" name="answer3" onblur="chanswer3()">
<label id="tanswer3"></label></div>
<div>移动电话:<input type="text" id="tel" name="tel"></div>
<div>QQ号码:<input type="text" id="qqnum" name="qqnum"></div>
<div>E_mail:<input type="text" id="email" name="email"></div>
<div>邮编:<input type="text" id="code" name="code"></div>
<div>联系地址:<input type="text" id="adress" name="adress"></div>
<div>验证码:<input type="text" id="velcode">
<label id="rgcode"></label></div>
<div><img src="velcode.php" id="velcode"></div>
<div><input type="submit" value="提交"></div>
</form>
</body>
</html><?php }} ?>
