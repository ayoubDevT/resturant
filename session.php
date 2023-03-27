<?php 

session_start();

if ($_SESSION['verification']=='0') {
	header('location:http://localhost:8080/resturant/thankyou.php');
}elseif (!isset($_SESSION['email'])) 
{
	header('location:http://localhost:8080/resturant/login.php');
}

 ?>