<?php include 'header.php';
include 'menu-crud.php'; ?>
<style type="text/css">
	html {
  scroll-behavior: smooth;
}
</style>
<!-- plat principal -->
	<section class="section-lunch bgwhite">
		<div class="header-lunch parallax0 parallax100" style="background-image: url(images/platpraincipal.jpg);">
			<div class="bg1-overlay t-center p-t-250 p-b-245">
				<h2 class="tit4 t-center">
					Plat Principal
				</h2>
			</div>
		</div>

		<div class="container ">
			<div class="row p-t-108 p-b-70">

 <?php
 while($row= $result->fetch_assoc()) 
 {
  ?> 
				<div class="col-md-8 col-lg-4 m-l-r-auto ">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size25 bo-rad-10 hov-img-zoom m-r-21">
							<a href="plat-vew.php?id=<?=$row['platid'];?>"><img src="<?=$row['img'];?>" ></a>
							<div class="star-review fs-18 color0 flex-c-m m-t-20">
									<?php if ($row['rate'] >= 1) {?><i class="fa fa-star fa-2x" aria-hidden="true"></i><?php } ?>
									<?php if ($row['rate'] >= 2) {?><i class="fa fa-star p-l-1 fa-2x" aria-hidden="true"></i><?php }else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
									<?php if ($row['rate'] >= 3) {?><i class="fa fa-star p-l-1 fa-2x" aria-hidden="true"></i><?php }else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
									<?php if ($row['rate'] >= 4) {?><i class="fa fa-star p-l-1 fa-2x" aria-hidden="true"></i><?php }else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
									<?php if ($row['rate'] >= 5) {?><i class="fa fa-star p-l-1 fa-2x" aria-hidden="true"></i><?php }else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
								</div>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								<?=$row['tp'];?>
							</a>

							<span class="txt23">
								<?=$row['nom'];?>
							</span>

							<span class="txt22 m-t-20">
								<?=$row['prix'];?>&nbsp; MAD
							</span>
						</div>
					</div>
				</div>
			<?php } ?>
			  </div>
			</div>
	</section>

<!-- Plat secondaire -->
<section class="section-dinner bgwhite" id="Sec">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(images/ella-olsson-1184067-unsplash.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Plat secondaire
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<?php
 while($row4= $result4->fetch_assoc()) 
 {
  ?> 
				<div class="col-md-8 col-lg-4 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size25 bo-rad-10 hov-img-zoom m-r-21">
							<a href="plat-vew.php?id=<?=$row4['platid'];?>"><img src="<?=$row4['img'];?>" ></a>
							<div class="star-review fs-18 color0 flex-c-m m-t-20">
									<?php if ($row4['rate'] >= 1) {?><i class="fa fa-star fa-2x" aria-hidden="true"></i><?php }else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
									<?php if ($row4['rate'] >= 2) {?><i class="fa fa-star p-l-1 fa-2x" aria-hidden="true"></i><?php }else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
									<?php if ($row4['rate'] >= 3) {?><i class="fa fa-star p-l-1 fa-2x" aria-hidden="true"></i><?php }else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
									<?php if ($row4['rate'] >= 4) {?><i class="fa fa-star p-l-1 fa-2x" aria-hidden="true"></i><?php }else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
									<?php if ($row4['rate'] >= 5) {?><i class="fa fa-star p-l-1 fa-2x" aria-hidden="true"></i><?php }else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
								</div>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								<?=$row4['tp'];?>
							</a>

							<span class="txt23">
								<?=$row4['nom'];?>
							</span>

							<span class="txt22 m-t-20">
								<?=$row4['prix'];?> &nbsp; MAD
							</span>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</section>

	<!-- desserts -->
	<section class="section-dinner bgwhite" id="Dessert">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(images/brooke-lark-203839-unsplash.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Desserts
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<?php
 while($row2= $result2->fetch_assoc()) 
 {
  ?> 
				<div class="col-md-8 col-lg-4 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size25 bo-rad-10 hov-img-zoom m-r-21">
							<a href="plat-vew.php?id=<?=$row2['platid'];?>"><img src="<?=$row2['img'];?>" ></a>
							<div class="star-review fs-18 color0 flex-c-m m-t-20">
									<?php if ($row2['rate'] >= 1) {?><i class="fa fa-star fa-2x" aria-hidden="true"></i><?php } else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
									<?php if ($row2['rate'] >= 2) {?><i class="fa fa-star p-l-1 fa-2x" aria-hidden="true"></i><?php }else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
									<?php if ($row2['rate'] >= 3) {?><i class="fa fa-star p-l-1 fa-2x" aria-hidden="true"></i><?php }else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
									<?php if ($row2['rate'] >= 4) {?><i class="fa fa-star p-l-1 fa-2x" aria-hidden="true"></i><?php } else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
									<?php if ($row2['rate'] >= 5) {?><i class="fa fa-star p-l-1 fa-2x" aria-hidden="true"></i><?php } else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
								</div>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								<?=$row2['tp'];?>
							</a>

							<span class="txt23">
								<?=$row2['nom'];?>
							</span>

							<span class="txt22 m-t-20">
								<?=$row2['prix'];?>&nbsp; MAD
							</span>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</section>

<!-- Drinks -->
<section class="section-dinner bgwhite" id="Drinks">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(images/rohan-g-803060-unsplash.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Drinks
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<?php
 while($row3= $result3->fetch_assoc()) 
 {
  ?> 
				<div class="col-md-8 col-lg-4 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size25 bo-rad-10 hov-img-zoom m-r-21">
							<a href="plat-vew.php?id=<?=$row3['platid'];?>"><img src="<?=$row3['img'];?>" ></a>
							<div class="star-review fs-18 color0 flex-c-m m-t-20">
									<?php if ($row3['rate'] >= 1) {?><i class="fa fa-star fa-2x" aria-hidden="true"></i><?php } else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
									<?php if ($row3['rate'] >= 2) {?><i class="fa fa-star p-l-1 fa-2x" aria-hidden="true"></i><?php }else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
									<?php if ($row3['rate'] >= 3) {?><i class="fa fa-star p-l-1 fa-2x" aria-hidden="true"></i><?php } else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
									<?php if ($row3['rate'] >= 4) {?><i class="fa fa-star p-l-1 fa-2x" aria-hidden="true"></i><?php } else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
									<?php if ($row3['rate'] >= 5) {?><i class="fa fa-star p-l-1 fa-2x" aria-hidden="true"></i><?php } else{?> <i class="fa fa-star fa-2x p-l-1 color2" aria-hidden="true"></i> <?php } ?>
								</div>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								<?=$row3['tp'];?>
							</a>

							<span class="txt23">
								<?=$row3['nom'];?>
							</span>

							<span class="txt22 m-t-20">
								<?=$row3['prix'];?>&nbsp; MAD
							</span>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>

		</div>

	</section>


	<!-- Sign up -->
	<div class="section-signup bg1-pattern p-t-85 p-b-85">
		<form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
			<span class="txt5 m-10">
				Specials Sign up
			</span>

			<div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
				<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address" placeholder="Email Adrress">
				<i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
			</div>

			<!-- Button3 -->
			<button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
				Sign-up
			</button>
		</form>
	</div>


	

<?php  include 'footer.php'; ?>

</body>
</html>
