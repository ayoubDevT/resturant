
<?php
include '../dbcon.php';


if (isset($_POST['update'])) {
	$company=$_POST['company'];
	$adresse=$_POST['adresse'];
	$street=$_POST['street'];
	$city=$_POST['city'];
	$codeposta=$_POST['postal-code'];
	$desciprtion=$_POST['desciprtion'];
    $owner=$_POST['owner'];
	$size =$_POST['size'];
	$admin =1;
	$aben = "dqsdsq";
	
	echo $company;

	$heuredebut = $_POST["time1"]; 
	 $heurefin = $_POST["time2"]; 
	 $ImageSavefolder = "images/user_gharib/logo";
	move_uploaded_file($_FILES["uploadImage"]["tmp_name"] , "$ImageSavefolder".$_FILES["uploadImage"]["name"]);
echo $_FILES['uploadImage']['name'];
    $query = "insert into restaurant values('$company','$adresse','$city','$postal-code','$heuredebut','$heurefin','$desciprtion','$size','$admin','$aben','".$_FILES['uploadImage']['name']."')";
    $result	= mysqli_query($conn,$query);
    mysqli_error($conn);


}

 ?>