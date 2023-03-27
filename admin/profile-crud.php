<?php
include('../dbcon.php');

$id = $_SESSION['id'];
if (isset($_POST['Update'])) {
	
	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$name = $_POST['name'];
	$login = $_POST['username'];
	$password = md5($_POST['password']);
	$password = md5($_POST['password2']);
	$adress = $_POST['textarea'];
	$ville = $_POST['ville'];

	

   if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    if ($_POST['password2']===$_POST['password']) {
    	
    if (empty($_FILES["file"]["name"])) {
		$target_file = $_SESSION['img'];
	}

	$query = "UPDATE admin SET nom='$name',address='$adress',villle='$ville'  WHERE compte='$id'";
 	$result = mysqli_query($conn,$query);

	$query2 = "UPDATE compte SET password ='$password',login ='$login' ,img='$target_file' WHERE id='$id'";
 	$result2 = mysqli_query($conn,$query2);

 	if ($result) {
 		$error = "succsses good job ".$_SESSION['name'];
        $typeerror = "success ";
        $icon ="fas fa-check-circle faa-flash animated";
 	}
 	else{
 		$error = "opsii ! Something went wrong ".$_SESSION['name'];
        $typeerror = "success ";
	    $icon ="fas fa-check-circle faa-flash animated";

 	}
	if ($result2) {
 		$error = "succsses good job ".$_SESSION['name'];
        $typeerror = "success ";
	    $icon ="fas fa-check-circle faa-flash animated";

 	}
 	else{
 		$error = "opsii ! Username alredy exists ";
        $typeerror = "danger ";
	    $icon ="fas fa-x";

 	}
 	$_SESSION['name']=$login;
         $_SESSION['img'] =  $target_file;

}
}

 


 ?>