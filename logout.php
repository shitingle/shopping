<?php
session_start();
$_SESSION['member']='';
header('Location: index.php');
?>