<?php 
	
include('..\dbcon.php');
if (isset($_POST['confirmepassword'])) {
	# code...

if($_POST['password'] !== $_POST['confirmepassword'])
		{
			$error = "password not alike";
	 		$typeerror = "warning ";
	 		$icon ="fas fa-check-circle faa-flash animated";
		}
else{
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

		$query = "INSERT INTO compte (email,password,login,datecreation,verification,vkey) VALUES ('$email','$password','$username','$time','1','$vkey') "; 
	 $result = mysqli_query($conn,$query);
	 

 if($result)
 {
 	$query1 = "select * from compte where vkey='$vkey'";
 	$result1 = mysqli_query($conn,$query1);
 	$row= mysqli_fetch_assoc($result1);
 	$id1= $row['id'];
 	$query2= "INSERT INTO admin(compte)VALUES('$id1')";
 	$result2= mysqli_query($conn, $query2);
 	if ($result2) {
 		$error = "succsses good job";
 		$typeerror = "success ";
 		$icon ="fas fa-check-circle faa-flash animated";
 		$query3 = "select * from admin where compte='$id1'";
	 	$result3 = mysqli_query($conn,$query3);
	 	$row2= mysqli_fetch_assoc($result3);
	 	$code= $row2['code'];
	 	$query4= "INSERT INTO restaurant(admin)VALUES('$code')";
	 	$result4= mysqli_query($conn, $query4);
 	}

 	//send email
	$sub = "restaurant";

	//the message
	$msg = "votre restaurant a été créer avec succes votre info : \r\n email :".$email."\r\n mot de passe : ".$_POST['password']."\r\n login : ".$username;
	//recipient email here
	$rec = $email;
	//send email
	
	$headers ="from : yafouzeayoub@gmail.com";
	
	mail($rec,$sub,$msg,$headers);
 }
 else
 {
 	$error = "<strong>Username Or Email </strong>  Alredy Exists";
 	$typeerror = "danger";
 	$icon ="fas fa-exclamation-triangle faa-flash animated";
 }

	

}}}
 ?>