<?php
session_start();
$_SESSION['member']='';
header('Location: http://localhost/shopping/index.php');
?>