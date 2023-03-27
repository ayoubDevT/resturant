     <link rel="icon" href="client_side/images/icons/favicon.png"><?php
include('header.php');
include 'restaurant-crud.php';
include ('azerty.php');
?>
<title>Restaurant</title>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8 offset-md-2">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Restaurant</strong>
                                    </div>
                                    <form method="post">
                                    <div class="card-body card-block">
                                         <div class="col col-md-4 offset-md-4">
                                             <div class="row form-group">
                                                  <div class="card">
                                                    <?php echo "<input type=\"image\" class=\"card-img-top\" src=".$_SESSION['logo']." alt=\"logo\" />";?>
                                                <div class="card-body">
                                                            <input type="file" id="my_file" name="file" style="display: none;">
                                                  </div>
                                                </div>
                                             </div>
                                          </div>
                                      
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Nom de restaurant</label>
                                            <input type="text" value="<?=$row['nom'];?>" name="Nom de restaurant" placeholder="Enter your company name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">adresse</label>
                                            <input type="text"value="<?php echo $row['adresse'];?>" name="adresse" placeholder="adresse" class="form-control">
                                        </div>
                                        <!--azeazeazeazeazeazeazeaz-->
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">start time</label>
                                            <input type="time" value="<?=$row['heureDebut'];?>" id="street" name="heureDebut"  placeholder="heure de debut" class="form-control">
                                        </div>

                                         <div class="form-group">
                                            <label for="street1" class=" form-control-label">end time</label>
                                            <input type="time" value="<?=$row['heureFin'];?>" id="street1" name="heureFin"  placeholder="heure de debut" class="form-control">
                                        </div>
                                                <div class="form-group">
                                                    <label for="city" class=" form-control-label">City</label>
                                                    <input type="text" id="city" value="<?=$row['ville'];?>" placeholder="Enter your city" name="ville" class="form-control">
                                                </div>
                                            
                                            
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Postal Code</label>
                                                    <input type="text" id="postal-code" value="<?=$row['codePostal'];?>" name="codePostal" placeholder="Postal Code" class="form-control">
                                                </div>

                                         <div class="form-group">
                                            <label for="size" class=" form-control-label">Size</label>
                                            <input type="text" id="size" value="<?=$row['capacite'];?>" placeholder="capacite" class="form-control" name="capacite">
                                        </div>
                                          <div class="form-group">
                                            <label for="description" class=" form-control-label">description</label>
                                            <textarea type="number" name="description" textmode="multiline"  id="country" placeholder="description" class="form-control"><?=$row['description'];?></textarea>
                                        </div>
                                    
                                        </div>
                                        <center><hr><br><input type="submit" class="btn btn-primary" name="update"></center>
                                        <br>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
                                       
<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous">
</script>

<script type="text/javascript">
    $("input[type='image']").click(function() {
    $("input[id='my_file']").click();
});
</script>

<?php
include('footer.php');

/* if(isset($_POST["submit"])) {
 
 if (!empty($_FILES["uploadImage"]["name"])) {

include 'dbconfig.php';

$ImageSavefolder = "images/";

move_uploaded_file($_FILES["uploadImage"]["tmp_name"] , "$ImageSavefolder".$_FILES["uploadImage"]["name"]);

mysql_query("INSERT into image_upload (image_name) VALUES('".$_FILES['uploadImage']['name']."')");

if($conn) { 

 Image name successfully saved into MySQL db

}

else {
 
Sorry, Please try again
}
 }
 else {
 
Select file to upload 
 
 }

 }*/
?>