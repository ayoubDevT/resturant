<?php
session_start();

unset($_SESSION['nome']);
unset( $_SESSION['email'] );
$_COOKIE['email'] = null;
$_COOKIE['password'] = null;
session_unset();
session_destroy();
header('location:login.php');
?>