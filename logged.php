<?php
require_once 'system.smarty.inc.php';
session_start();
$member=$_SESSION['member'];
$smarty->assign("member",$member);

