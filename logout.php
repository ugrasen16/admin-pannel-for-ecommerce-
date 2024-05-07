<?php
session_start();

$_SESSION['login']=session_unset();
header("location:login.php");

$_SESSION['role']=session_unset();
header("location:login.php");

$_SESSION['log']=session_unset();
header("location:login.php");
?>