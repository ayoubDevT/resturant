<head>
	<?php session_start();
	include('../../session.php');
	include('../../dbcon.php');?>
	<title>Home</title>
	<meta charset="UTF-8">

	 <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">


	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/theme.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<!--===============================================================================================-->
</head>
<script type="text/javascript">
	(function(){
 
  $("#cart").on("click", function() {
    $(".shopping-cart").fadeToggle( "fast");
  });
  
})();
</script>
<style type="text/css">
	$main-color: #6394F8;
$light-text: #ABB0BE;

@import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);

@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
.lighter-text {
  color: #ABB0BE;
}

.main-color-text {
  color: $main-color;
}
.container {
  margin: auto;
  width: 80%;
}

.badge {
    background-color: #6394F8;
    border-radius: 10px;
    color: white;
    display: inline-block;
    font-size: 12px;
    line-height: 1;
    padding: 3px 7px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
}

.shopping-cart {
  margin: 20px 0;
  float: right;
  background: white;
  width: 320px;
  position: relative;
  border-radius: 3px;
  padding: 20px;
  }
  
 .shopping-cart-header {
    border-bottom: 1px solid #E8E8E8;
    padding-bottom: 15px;}
    
    .shopping-cart-total {
      float: right;
    }
  }
  
  .shopping-cart-items {
    
    padding-top: 20px;

      li {
        margin-bottom: 18px;
      }

    img {
      float: left;
      margin-right: 12px;
    }
    
    .item-name {
      display: block;
      padding-top: 10px;
      font-size: 16px;
    }
    
    .item-price {
      color: $main-color;
      margin-right: 8px;
    }
    
    .item-quantity {
      color: $light-text;
    }
  }
   
}

.shopping-cart:after {
	bottom: 100%;
	left: 89%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-bottom-color: white;
	border-width: 8px;
	margin-left: -8px;
}

.cart-icon {
  color: #515783;
  font-size: 24px;
  margin-right: 7px;
  float: left;
}

.button {
  background: $main-color;
  color:white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  display: block;
  border-radius: 3px;
  font-size: 16px;
  margin: 25px 0 15px 0;
}
  
  &:hover {
    background: lighten($main-color, 3%);
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
.me{
	padding-left: 5px;
}
@media(max-height: 160px)
{
	.me{
		padding-left: 85px;
		padding-top: 60px;
	}
}

</style>

<?php session_start(); 

			$query6 = " SELECT count(*) as 'number' FROM panier where client =". $_SESSION['client']; 
 		$stmt = $conn->prepare($query6);
		$result6 = $conn->query($query6);
		$row6= $result6->fetch_assoc();

		$query5 = "select logo from restaurant where id=".$_SESSION['restofolow'];
        $stmt = $conn->prepare($query5);
        $result5 = $conn->query($query5);
	    $row5 = $result5->fetch_assoc();

?>
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo m-l-40	">
						<a href="../index.php">
							<img src="../<?=$row5['logo']?>" width="200" alt="IMG-LOGO" data-logofixed="../<?=$row5['logo']?>">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-10 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="index.php">home</a>
								</li>

								<li>
									<a href="menu.php">Menu</a>
								</li>

								<li>
									<a href="reservation.php">Reservation</a>
								</li>

								<li>
									<a href="about.php">About</a>
								</li>

								<li>
									<a href="contact.php">Contact</a>
								</li>

								<li>
									<a href="profile.php">Profile</a>
								</li>
				
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w me">
						<a href="panier.php" id="basket">
							<i class="fa fa-shopping-cart fa-2x" aria-hidden="true" >
							</i>
						</a>
						<span class="quantity" style="color: white; background-color: #dc3545;border-radius:100%;min-width: 23px;max-height: 20px;font-size: 14px;text-align: center; padding-bottom: 24px;"><?php echo $row6['number'];?>
						</span>
						<button class="btn-show-sidebar m-l-33 m-t-10 trans-0-4">
						</button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="index.php" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="menu.php" class="txt19">Menu</a>
			</li>

			<li class="t-center m-b-13">
				<a href="about.php" class="txt19">About</a>
			</li>
			<li class="t-center m-b-13">
				<a href="profile.php">Profile</a>
			</li>
			<li class="t-center m-b-13">
				<a href="contact.php" class="txt19">Contact</a>
			</li>

			<li class="t-center m-b-53">
				<a href="../../logout.php" class="txt19">Logout</a>
			</li>
			
			 

			<li class="t-center">
				<!-- Button3 -->
				<a href="reservation.php" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Reservation
				</a>
			</li>
			
		</ul>
	</aside>

	
