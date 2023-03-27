<?php include 'header.php';
include 'panier-crud.php';
session_start();
	?>
 <meta http-equiv="refresh" content="-1">
   <!-- Core Style CSS -->
<body class="animsition">
				<div class="header-dinner parallax0 parallax100 " style="background-image: url(images/cel-lisboa-60314-unsplash.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					checkout
				</h2>
			</div>
		</div>
            <link rel="stylesheet" href="css/core-style1.css">
<script type="text/javascript">      
     function confirmDelet(id)
    {
          swal({
        title: "Êtes-vous sûr?",
        text: "Une fois supprimé, vous ne pourrez plus le récupérer.!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
      .then((willDelete) => {
        if (willDelete) {
           setTimeout(function() {window.location.href="panier.php?delete="+id},2000); 
          swal("Your file has been deleted!", {
            icon: "success",
            buttons:false,
           
          });
        }
        });
    }
</script>
<section class="section-welcome bg4-pattern p-t-120 p-b-105" id="me">
	<div class="content-intro  p-t-77 p-b-133 ">
		<br>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
					<div class="table-responsive table-responsive-data2 ">
                                    <table class="table table-data2" id="myTable" id="overlay">
                                        <thead>
                                            <tr style="color: blue">
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th style="min-width: 190px"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            

                                            	 <?php
                                              while($row= $result->fetch_assoc()) 
                                              {
                                               ?>   
                                            <tr class="border border-warning">                                   
                                                <td >
                                                    <div class="table-data-feature">
                                                        <a class="p-t-20" onclick="<?='confirmDelet('.$row['id'].')"';?>">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td><?=$row['nom'];?></td>
                                                <td class="desc"><?=$row['prix'];?> MAD</td>
                                                <td>
                                                    <span class="status--process"><?=$row['type'];?></span>
                                                </td>
                                                <td><?=$row['quantity'];?></td>
                                                <td><img style="max-width:160px; height:80px ;" src="<?=$row['image'];?>" ></td>
                                            </tr>
        <?php }?>
        
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                    <div class="col-md-6">
                        <div class="col-12 p-t-30 m-l-40  ">
                          <div class="order-details-confirmation bg-white border border-warning">

                        <div class="cart-page-heading ">
                            <h5>Your Order</h5>
                            <p>The Details</p>
                        </div>

                        <ul class="order-details-form mb-4">

             <?php
               while($row7= $result22->fetch_assoc()) 
              {
             ?> 
             <li><span><?=$row7['nom'];?></span> <span><?=$row7 ['prix'];?> MAD</span></li>
         <?php } ?>
         <li><span>TOTAL</span> <span><?php $total = 0;
            while($row5= $ress->fetch_assoc()) {
                $total = $total + ($row5['prix'] * $row5['quantity']); 
            }
            echo $total." MAD";
             ?></span></li>
                        </ul>

                        <div id="accordion" role="tablist" class="mb-4">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h6 class="mb-0">
                                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa fa-paypal mr-3"></i>Paypal</a>
                                    </h6>
                                </div>

                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-money mr-3"></i>cash on delievery</a>
                                    </h6>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quis in veritatis officia inventore, tempore provident dignissimos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-credit-card mr-3"></i>credit card</a>
                                    </h6>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quo sint repudiandae suscipit ab soluta delectus voluptate, vero vitae</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="reservationpdf.php" class="btn essence-btn">Place Order</a>
                    </div>
                </div>
                                        </div>

				</div>
			</div>
		</div>
</section>
   
</body>
   
    <!-- Active js -->
<?php include 'footer.php'; ?>
     <script src="vendor/sweetalert/sweetalert.min.js"></script>