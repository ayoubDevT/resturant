<?php //Post Params 
include '../dbcon.php';


$nom = $_POST['nom'];  
$adresse = $_POST['adresse'];  
$ville = $_POST['ville'];  
$codePostal = $_POST['codePostal'];  
$heureDebut = $_POST['heureDebut'];  
$heureFin = $_POST['heureFin'];  
$description = $_POST['description'];  
$capacite = $_POST['capacite'];  
$logo = $_POST['logo'];  

//SELECT 
 $query = " SELECT nom, adresse, ville, codePostal, heureDebut, heureFin, description, capacite, logo FROM restaurant WHERE id =".$_SESSION['resto']; 
 $result = mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($result);

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

 //UPDATE 
 if (isset($_POST['update'])) {
 	$query1 = " UPDATE restaurant SET  nom = '$nom',  adresse = '$adresse',  ville = '$ville',  codePostal = '$codePostal',  heureDebut = '$heureDebut',  heureFin = '$heureFin',  description = '$description',  capacite = '$capacite' WHERE id = ".$_SESSION['resto']; 
 $result1 = mysqli_query($conn,$query1); 

 if( $result1 )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }
 }
 

?>