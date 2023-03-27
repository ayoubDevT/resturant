   <?php
include('header.php');
?>
<?php $query = "SELECT *  FROM menu INNER JOIN restaurant ON menu.restaurant = restaurant.id and restaurant=".$_SESSION['resto']; 
        $stmt = $conn->prepare($query);
        $result = $conn->query($query); ?>

        <title>Menu</title>
<div class="main-content">
  <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Menu</h3>
                            
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>Resturant</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>image</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                 <?php
                                              while($row= $result->fetch_assoc()) 
                                              {
                                               ?>  
                                            <tr class="tr-shadow">
                                               
                                                <td><img style="max-height: 55px;" src="<?=$row['logo'];?>"></td>
                                                <td>
                                                    <span class="block-email"><?=$row['noms'];?></span>
                                                </td>
                                                <td class="desc"><?=$row['type'];?></td>
                                                <td>
                                                    <span class="status--process"><?=$row['calorie'];?></span>
                                                </td>
                                                <td>
                                                    <img style="max-height: 50px;" src="<?=$row['image'];?>">
                                                </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                           
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                    <br><br><br><br><br><br>
                          <?php
include('footer.php');
?>