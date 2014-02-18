<?php
require_once 'comm/opmysql.php';
require_once 'comm/PHPMailer/class.phpmailer.php';
$url='http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/activation.php';
$url.='?name='.$_GET['uname'].'&pwd='.md5($_GET['pwd']).'';
$subject="领取激活码";
$mailbody='<html><body>请点击地址激活:'.'<a href="'.$url.'" target="_blank">'.$url.'</a><br>'.'请点击改地址，激活您的邮箱</body></html>';
$mail=new PHPMailer(true);
$mail->IsSMTP();
$mail->CharSet='utf-8';
$mail->SMTPAuth=true;
$mail->Port=25;
$mail->Host="smtp.163.com";
$mail->From="shitingle@163.com";
$mail->FromName="shitingle";
$mail->Username="shitingle";
$mail->Password="135072562";
$mail->Subject=$subject;
$mail->IsHTML(true);
$mail->Body=$mailbody;
$mail->AddReplyTo("shitingle@163.com","shitingle");
$mail->AddAddress($_GET['email'],"注册");
$mail->Send();
$sql="insert into tb_user(name,password,question1,answer1,question2,answer2,question3,answer3,
tel,email,qq,code,address) values('{$_GET['uname']}','{$_GET['pwd']}','{$_GET['question1']}',
'{$_GET['answer1']}','{$_GET['question2']}','{$_GET['answer2']}','{$_GET['question3']}','{$_GET['answer3']}',
'{$_GET['tel']}','{$_GET['email']}','{$_GET['qqnum']}','{$_GET['code']}','{$_GET['adress']}')";
$num=$db->exec($sql);
if($num==null){
	echo "error";
}else{
	echo "注册成功，请进入邮箱点击激活";
}
?>

