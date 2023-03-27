<?php include 'plat-vew-crud.php'; 
 include 'header.php';?>
<link rel="stylesheet" type="text/css" href="css/particles.css" />
<style type="text/css">
	html{
		scroll-behavior: smooth;
	}
	a.fly-to-basket {
  margin: 3px;
  display: block;
  float: left;
}
</style>
<?php 	
if (isset($_POST['addto'])) {
		$client = $_SESSION['client'];
        $plat = $_GET['id'];

        $pleases ="SELECT plat from panier where plat='$plat'";
		$stmt = $conn->prepare($pleases);
		$memes = $conn->query($pleases);
		$count = mysqli_num_rows($memes);
		echo $count;
		if ($count>=1) {

		$please ="UPDATE panier set quantity=quantity+1 where plat='$plat'";
		$stmt = $conn->prepare($please);
		$meme = $conn->query($please);
		echo '<meta http-equiv="refresh" content= "0;URL=?id='.$plat.'" />';

		}elseif ($count==0) {

		$rec ="INSERT into panier VALUES ('','$client','$plat',1,'".$_SESSION['restofolow']."')";
		$stmt = $conn->prepare($rec);
		$rsl = $conn->query($rec);
		echo '<meta http-equiv="refresh" content= "0;URL=?id='.$plat.'" />';
		}

}
		?>
		
<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/base.css" />

<body class="animsition">
 <div class="header-dinner parallax0 parallax100" style="background-image: url(images/rohan-g-803060-unsplash.jpg); text-align: center;">
			<div class="bg1-overlay t-center p-t-250 p-b-250">
				<h2 class="tit4 t-center">
					Plates and Drinks
				</h2>
			</div>
		</div>


<section class="section-welcome bg2-pattern p-t-120 p-b-105" id="me">
		<div class="container">
			<div class="row">

				<div class="loc col-md-5">
					<div class="blo3 flex-w flex-col-l-sm m-b-1">
						<div class="pic-blo3 size22 bo-rad-10 hov-img-zoom m-r-20">
							<a href="#"  >
								<img id="image1" src="<?=$row['image'];?>">
							</a>
						</div>
						<!-- fetch data coming from menu with the method get-->
					   </div>
					   <div class="grid__item theme-9" style="width: 96%;height: 70px;">
					   	<form method="post" id="her" name="yay">
							<a  class="fly-to-basket" name="addto"  data-fly-to-basket="#image1" id="lul" href="">
								<button class="particles-button " name="addto" id="btn" onclick="me();" style="width: 700px;">Add to cart</button>
							</a>
						</form>
						</div>
		 				<div class="col-md-12 col-sm-10 m-l-r-auto m-t-20">
						<!-- Block3 -->

						<div class="text-blo3 size25 flex-col-l-m">
								<a href="#" class="txt20">
									<?=$row['type'];?>
								</a>

								<span class="txt20">
									<?=$row['nom'];?>
								</span>

								<span class="txt20 m-t-20">
									<?=$row['prix'];?>&nbsp;MAD 
								</span>
						</div>
						</div>
				</div>
	<!-- fetch 3 random data-->
<?php while ($row2= $result2->fetch_assoc()) {
	 				
	 			?>
	
		<div class="col-md-2">
			

						<div class="col-12 m-t-250">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="<?=$row2['img'];?>">
								<!-- Button inside the radom data -->
								<a href="plat-vew.php?id=<?=$row2['platid'];?>&?some_param=1#me" class="btn1 flex-c-m txt9 ab-c-m size1">
									View
								</a>
							</div>
							<br>
							<div class="text-blo3 size20 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								<?=$row2['tp'];?>
							</a>

							<span class="txt23">
								<?=$row2['nom'];?>
							</span>

							<span class="txt22 m-t-22">
								<?=$row2['prix'];?> &nbsp; MAD 
							</span>

						</div>
					</div>
	 </div><?php } ?>
	  </div>

	</div>

</section>
<script type="text/javascript">
	function me(argument) {
		setTimeout(function() {$('#lul').submit(); $('#her').submit();},2000);
	}
	
</script>
	
<?php include 'footer.php'; ?>
<!-- <script src='plat.js'></script>-->
<script src='js/anime.min.js'></script>
<script src='js/particles.js'></script>
<script src='js/demo.js'></script></body>