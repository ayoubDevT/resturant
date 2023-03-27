<!DOCTYPE html>
<html>
<head>

<?php 
session_start();
include '../../dbcon.php';
	$query ="SELECT * from client where id=".$_SESSION['client'];
	$result = mysqli_query($conn,$query);

	$query1 ="SELECT * from reservation where client=".$_SESSION['client'];
	$result1 = mysqli_query($conn,$query1);

	$query2 = " SELECT * FROM panier INNER JOIN plat ON plat.id = panier.plat WHERE client =".$_SESSION['client']; 
	$result2 = mysqli_query($conn,$query2);

	$que = " SELECT prix,quantity FROM panier INNER JOIN plat ON plat.id = panier.plat"; 
	$ress = $conn->query($que);

 ?>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">

<style type="text/css">
	body{
		font-style: thin;
		font-size: 17px;
	}
</style>

<!--===============================================================================================-->
</head>
<body >
	<div class="container border border-success">
		<div class="row">
			<div class="col col-lg-12 bg2-pattern">
				<img src="images/icons/logo.png" style="max-height: 150px;padding-left: 35%">
					
			</div>
				<div class="col-lg-12 bg2-pattern">
					<table class="table table-sm border border-success">
						<tr>
							<th></th>
							<th>name</th>
							<th>adresse</th>
							<th>ville</th>
						</tr>
						<?php while ($row= $result->fetch_assoc()) {?>
						<tr>
							<td></td>
							<td><?=$row['nom'];?></td>
							<td><?=$row['adresse'];?></td>
							<td><?=$row['ville'];?></td>
						</tr>
					<?php } ?>
					</table>
				</div>
					
				<div class="col-lg-12 bg2-pattern ">
					<table class="table table-sm border border-success">
						<tr>
							<th>date reservation</th>
							<th>nomber de place</th>
							<th>mode de payement</th>
							<th>date de reservation</th>
						</tr>
						<?php while ($row2= $result1->fetch_assoc()) {?>
						<tr>
							<td><?=$row2['date'];?></td>
							<td><?=$row2['nbrPlace'];?></td>
							<td><?=$row2['modePayement'];?></td>
							<td><?=$row2['date_reservation'];?></td>
						</tr>
					<?php } ?>
					</table>
				</div>
					<div class="col-lg-12 bg2-pattern ">
					<table class="table table-sm border border-success">
						<tr>
							
							<th>nom plat</th>
							<th>prix plat</th>
							<th>quantity</th>
						</tr>
						<?php while ($row3= $result2->fetch_assoc()) {?>
						<tr>
							
							<td><?=$row3['nom'];?></td>
							<td><?=$row3['prix'];?> MAD</td>
							<td><?=$row3['quantity'];?></td>
						</tr>
						<?php } ?>
					</table>
					<CENTER><span><i class="fa fa-money"><STRONG> &nbsp;&nbsp; Total: <span><?php $total = 0;
            while($row5= $ress->fetch_assoc()) {
                $total = $total + ($row5['prix'] * $row5['quantity']); 
            }
            echo $total." MAD";
             ?></span></STRONG> </i></span></CENTER>
				</div>
			
				<div class="col col-lg-12 p-t-50 bg2-pattern">
					<small style="margin-left: 22%;">copyright <i class="fa fa-copyright"></i> 2019 grab made in morroco by <i class="fa fa-code"></i> gharib & yafouze <i class="fa fa-code"></i></small>
					<img src="assets/images/sign.png">
				</div>

			</div>
		</div>
		<br>
		<br>
		<br>
		<div class="container">
			<button class="btn btn-outline-primary btn-block" OnClick="javascript:window.print()" > <i class="fa fa-print"> </i> IMPRIMER LE PDF</button>
		</div>

</body>
</html>