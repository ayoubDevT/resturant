<?php 
require 'dbcon.php';

if (isset($_GET['vkey'])) {
	$vkey=$_GET['vkey'];
	$query = "update compte set verification =1  where vkey ='$vkey'";
	$result = mysqli_query($conn, $query);
	if ($result) {
		header('location:login.php');
	}
	else{
		echo mysqli_error($conn);
	}

}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>