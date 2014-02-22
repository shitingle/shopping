<?php
header("Content-type:text/html;charset=UTF-8");
require_once 'comm/opmysql.php';
require_once 'system.smarty.inc.php';
session_start();
if(isset($_GET['page'])){
	$page=$_GET['page'];
}else{
	$page="";
}
if($_SESSION['member']){
	include_once 'logged.php';
	$smarty->assign("login","logged.html");
}else{
	include_once 'login.php';
	$smarty->assign("login","login.html");
}
switch($page){
	case "hyzx":
		$smarty->assign("admin_phtml","member.html");
	    break;
    case "allpub":
    	$smarty->assign("admin_phtml","allpub.html");
    	break;
    case "nom":
    	include_once 'allnom.php';
    	$smarty->assign("admin_phtml","allnom.html");
    	break;
    case "new":
    	$smarty->assign("admin_phtml","allnew.html");
    	break;
    case "hot":
    	$smarty->assign("admin_phtml","allhot.html");
    	break;
    case "shopcar":
    	include_once 'myshopcar.php';
    	$smarty->assign("admin_phtml","myshopcar.html");
    	break;
    case "settle":
    	$smarty->assign("admin_phtml","settle.html");
    	break;
    case "queryform":
    	$smarty->assign("admin_phtml","queryform.html");
        break;
    default:
       include_once 'newhot.php';
    	$smarty->assign("admin_phtml","newhot.html");
    	break;		
	    
}
$smarty->display('index.html');