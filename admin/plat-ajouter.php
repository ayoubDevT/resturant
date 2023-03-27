<?php 	

$target_dir = "images/";
$target_file = $target_dir.basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

   if (isset($_GET['delete'])) {
    $d1=$conn->prepare("delete from plat where id=".$_GET['delete']);
          $d1->execute();
          header('location:plate.php');
        }

   if ( isset ($_POST['Confirm']) && isset($_POST['nom']))
   {

   if (move_uploaded_file($_FILES["file"]["tmp_name"] , $target_file)) {

        
          $imagess ="http://localhost:8080/resturant/admin/". $target_file;
          $nom = $_POST['nom'];
          $description= $_POST['description'];
          $prix = $_POST['prix'];
          $type = $_POST['type'];
          $cal = $_POST['cal'];
          $menu = $_POST['menu'];
          $star = $_POST['star'];

          $me = "INSERT into plat values('','$type','$nom','$imagess','$calories','$prix','$description','$menu','ayman','$star')";
          $resultss = mysqli_query($conn,$me);

          mysqli_error($conn);

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
          
   }


 

 ?>