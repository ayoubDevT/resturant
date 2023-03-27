<?php include('header.php');
include('../dbcon.php');


$query = "SELECT * FROM plat WHERE id = ".$_GET['id'];
		$ez = $conn->query($query);
$query2 = "SELECT nom FROM menu WHERE id = ".$_SESSION['id'];
        $ef = $conn->query($query2);
 $error = false;
if (isset($_POST['me'])) {
   
   $image= $_POST['image'];
  $nom = $_POST['nom'];
   $description= $_POST['description'];
   $prix = $_POST['prix'];
   $type = $_POST['type'];
   $cal = $_POST['cal'];
   $menu = $_POST['menu'];

   $query1 = "UPDATE plat set type='$type',nom='$nom',discription='$description',prix=$prix, calorie='$cal', menu='$menu' where id=".$_GET['id'];
   $result = mysqli_query($conn,$query1);


   if ($result) {
       $error = true;
       $errormsg = "updated successfuly";
       $typeerror ="success";
      

   }else
   {
        $error = true;
       $errormsg = "something went wrong";
       $typeerror = "danger";
   }
}
?>
    <title>Plat Detail</title>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <?php if ($error===true) { ?>
                                <div class="alert alert-<?php echo $typeerror; ?>"role="alert">
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <center><i class="pl-3"><?php echo $errormsg; ?></i></center>  
                                </div>
                              <?php } ?>
                        <div class="row">
                              
                        	 <div class="col-md-6 ">
                                <div class="card">
                                <?php  while($row = $ez->fetch_assoc())
                                {?> 
                                    <input  type="image" class="card-img-top" src="<?=$row['image'];?>">
                                    <input  type="file" class="au-input au-input--full" id="my_file" name="image" style="display: none;">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                            <div class="card-body">
                            <form method="post">
                                <div class="form-group">
                                    <label for="nom">Nom : </label>
                                    <input type="text" class="au-input au-input--full" id="nom" name="nom" placeholder="nom" value="<?=$row['nom'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="nom">prix :</label>
                                    <input type="number" class="au-input au-input--full" id="nom" name="prix" value="<?=$row['prix'];?>" placeholder="prix">
                                </div>
                                <div class="form-group">
                                    <label for="cal">calories :</label>
                                    <input type="number" class="au-input au-input--full" id="cal" name="cal" value="<?=$row['calorie'];?>" placeholder="Calories">
                                </div>
                                <div class="form-group">
                                    <label for="nom">description :</label>
                                <textarea class="au-input au-input--full"  id="nom" name="description" style="min-height: 140px;" placeholder="description"><?=$row['discription'];?></textarea>
                                </div>  <br>
                                    <div class="col col-sm">
                                        
                                <div class="form-group" style="float: left;">
                                    <label for="select">type :</label>
                                     <div class="rs-select2--dark rs-select2--md rs-select2--white">
                                            <select id="select" class="js-select2" name="type">
                                               <option  value="Dessert">Dessert</option>
                                                <option value="Plat Principal">Plat Principal</option>
                                                <option value="Plat Secondaire">Plat Secondaire</option>
                                                <option value="Drink">Drink</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        </div>
                                    
                                        <div class="form-group" style="float: right;">

                                    <label for="menu">Menu :</label>
                                     <div class="rs-select2--dark rs-select2--md rs-select2--white">
                                            <select id="menu" class="js-select2" name="menu">
                                                <option value="1">Fish</option>
                                                <option value="1">Pizza</option>
                                                <option value="1">Pasta</option>
                                                <option value="1">Drinks</option>
                                                <option value="1">Dessert</option>

                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        </div>
                                        
                                    </div>
                              <center><input type="submit" name="me" class="btn btn-info btn-sm" value="update" style="margin-top: 150px;">
                                            <a class="btn btn-success btn-sm" href="plate.php" style="margin-top: 150px;"><i class="fa fa-magic"></i>Reture</a></center>  
                              </form>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
</div> <?php } ?>

<script type="text/javascript">
    $("input[type='image']").click(function() {
    $("input[id='my_file']").click();
});
</script>
<?php include('footer.php');
?>