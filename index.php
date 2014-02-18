<?php
header("Content-type:text/html;charset=UTF-8");
require_once 'system.smarty.inc.php';
if(isset($_GET['page'])){
	$page=$_GET['page'];
}else{
	$page="";
}
$smarty->assign("hello","wqewq");

switch($page){
	case "hyzx":
		$smarty->assign("admin_phtml","member.html");
	    break;
    case "allpub":
    	$smarty->assign("admin_phtml","allpub.html");
    	break;
    case "nom":
    	$smarty->assign("admin_phtml","allnom.html");
    	break;
    case "new":
    	$smarty->assign("admin_phtml","allnew.html");
    	break;
    case "hot":
    	$smarty->assign("admin_phtml","allhot.html");
    	break;
    case "shopcar":
    	$smarty->assign("admin_phtml","myshopcar.html");
    	break;
    case "settle":
    	$smarty->assign("admin_phtml","settle.html");
    	break;
    case "queryform":
    	$smarty->assign("admin_phtml","queryform.html");
        break;
    default:
    	$smarty->assign("admin_phtml","newhot.html");
    	break;		
	    
}
$smarty->display('index.html');