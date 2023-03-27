<?php 
	
	include('dbcon.php');
if($_POST['password'] !== $_POST['confirmepassword'])
		{
			$error = "password not alike";
	 		$typeerror = "warning ";
	 		$icon ="fas fa-check-circle faa-flash animated";
		}

	if(isset($_POST['register']) && empty($_POST['username']) && !empty($_POST['email']) && $_POST['password'] == $_POST['confirmepassword'] )
{
		
	$typeerror = "warning";
 	$error = "Please fill every thing ";
 	$icon ="fas fa-exclamation-triangle faa-flash animated";
}

		

if(isset($_POST['register']) && !empty($_POST['username']))
{
	
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$confirmpassword = $_POST['confirmepassword'];
	$vkey = md5(time().$username);
	$time= date("Y-m-d H:i:sa");

		$query = "INSERT INTO compte (email,password,login,datecreation,verification,vkey) VALUES ('$email','$password','$username','$time','0','$vkey') "; 
	 $result = mysqli_query($conn,$query);
	 

 if($result)
 {
 	$query1 = "select id from compte where '$vkey'";
 	$result1 = mysqli_query($conn,$query1);
 	$row= mysqli_fetch_assoc($result1);
 	$id1= $row['id'];
 	$query2= "insert into client(compte)VALUES('$id1')";
 	$result2= mysqli_query($conn, $query2);
 	if ($result2) {
 		$error = "succsses good job";
 		$typeerror = "success ";
 		$icon ="fas fa-check-circle faa-flash animated";
 	}

 	//send email
	$sub = "Your subject";
	//the message
	$msg = "confirm your email http://localhost:8080/resturant/validation.php?vkey=$vkey";
	//recipient email here
	$rec = $email;
	//send email
	$headers = '';
	header("refresh:1;url=thankyou.php" );
	mail($rec,$sub,$msg,$headers);
 }
 else
 {
 	$error = "<strong>Username Or Email </strong>  Alredy Exists";
 	$typeerror = "danger";
 	$icon ="fas fa-exclamation-triangle faa-flash animated";
 }

	

}
 ?>