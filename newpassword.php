<?php 
include ('dbcon.php');
if (!isset($_GET['vkey'])) {
			$error = "enter from your email don't try to be snikky =)";
            $typeerror = "danger ";
            $icon ="fas fa-exclamation-triangle faa-spin animated";
}
if (isset($_POST['btn']) && isset($_GET['vkey'])) {
	$vkey = $_GET['vkey'];
	$pass = $_POST['pass'];
	$pass2 = $_POST['pass2'];
	if ($pass == $pass2) {
		$query = " UPDATE compte set password ='$pass' where vkey ='$vkey";
		$result = mysqli_query($conn,$query);

		if ($result) {
					$error = "succsses good job";
                    $typeerror = "success ";
                    $icon ="fas fa-check-circle faa-spin animated";
					header('refresh:2;url=login.php');
		}else{
					$error = "somthing went wrong enter from your email";
                    $typeerror = "danger ";
                    $icon ="fas fa-exclamation-triangle faa-spin animated";
		}
	}

}
	
 ?>
<html>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>new Password</title>

    <!-- Fontfaces CSS-->
    <link href="admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="admin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="" style="background-image: url('bg.jpg');background-repeat: no-repeat;background-size: cover;">
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container">
                <div class="login-wrap m-t-90">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="logo.png" alt="grab" style="height: 60px;">
                            </a>
                        </div>
                        <?php if (isset($error)) { ?>
                                <div class="alert alert-<?php echo $typeerror; ?>" role="alert">

                                  <center><i class="<?php echo $icon; ?>"></i> <i class="pl-3"><?php echo $error; ?></i></center>  
                                </div>
                              <?php } ?>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>New password</label>
                                    <input class="au-input au-input--full" type="password" name="pass" placeholder="new password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm new password</label>
                                    <input class="au-input au-input--full" type="password" name="pass2" placeholder="confirme password">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" name="btn" type="submit">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="admin/vendor/slick/slick.min.js">
    </script>
    <script src="admin/vendor/wow/wow.min.js"></script>
    <script src="admin/vendor/animsition/animsition.min.js"></script>
    <script src="admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="admin/js/main.js"></script>

</body>

</html>