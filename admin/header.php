<!DOCTYPE html>
 <script src="push/jquery-3.2.1.min.js"></script>

  <script src="push/notification.js"></script>
<html lang="en">
<?php session_start();

if (isset($_SESSION['client'])) {
    header('location:http://localhost:8080/resturant/404/404.html');
}
 require_once('../session.php'); 
 include('../dbcon.php');

$roket = "SELECT * FROM restaurant where id=".$_SESSION['resto'];
$natija = mysqli_query($conn,$roket);
$ster = mysqli_fetch_assoc($natija);
$_SESSION['logo']=$ster['logo'];
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">
    function confirme()
    {
          swal({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
      .then((willDelete) => {
        if (willDelete) {
           setTimeout(function() {window.location.href="../logout.php"},1500), 
          swal("logout", {
            icon: "success",
            buttons:false,
           
          });
        }
        });
    }
</script>
<style type="text/css">
    .swal-size-sm
{
   width: 500px !important;
   height: 300px !important;
   font-size: 12px !important;
}
.swal2-size-sm
{
   width: 500px !important;
   height: 300px !important;
   font-size: 12px !important;
}
</style> 
<head>
     <link rel="icon" href="client_side/images/icons/favicon.png">
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">


    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
    <div class="page-wrapper ">

 <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                           <?php echo '<img style="height: 80px;" src="'.$_SESSION['logo'].'">';  ?>
                           +212625881150
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled" >
                        
                                <li><a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Rapports</a></li>

                                <li><a href="profile.php">
                                <i class="zmdi zmdi-account"></i>Account</a></li>

                                 <li><a href="restaurant.php">
                                <i class="zmdi zmdi-cutlery"></i>Restaurant</a></li>

                                <li><a href="menu.php">
                                <i class="zmdi zmdi-menu"></i>Menu</a></li>

                                <li><a href="plate.php">
                                <i class="fa fa-bullseye"></i>Plate</a></li>

                                 <li><a href="calendar.php">
                                <i class="zmdi zmdi-calendar"></i>Calendar</a></li>

                                <li>
                                    <a href="clock.php"><i class="fa fa-bullhorn"></i>Events</a>
                                </li>

                                <li>
                                    <a href="add_notification.php"><i class="fa fa-send"></i>Add Notification</a>
                                </li>

                                <li>
                                    <a href="pricing.php"> <i class="zmdi zmdi-money-box"></i>subscription</a>
                                </li>

                                 <li><a href="#" onclick="confirme();">
                                <i class="zmdi zmdi-power" ></i>Logout</a></li> 
                       
                           
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->
          <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                  <img style="height: 80px;" src="<?=$_SESSION['logo']?>" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                            <li><a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>rapports</a></li>
                            <li><a href="profile.php">
                                <i class="zmdi zmdi-account"></i>Account</a></li>
                           
                            <li><a href="restaurant.php">
                                <i class="zmdi zmdi-cutlery"></i>Restaurant</a></li>

                                <li><a href="menu.php">
                                <i class="zmdi zmdi-menu"></i>Menu</a></li>

                                 <li><a href="plate.php">
                                <i class="fa fa-bullseye"></i>Plate</a></li>

                                <li><a href="calendar.php">
                                <i class="zmdi zmdi-calendar"></i>calendar</a></li>

                                <li>
                                    <a href="add_notification.php"><i class="fa fa-send"></i>Add Notification</a>
                                </li>

                                <li><a href="clock.php">
                                <i class="fa fa-bullhorn"></i>events</a></li>
                                <li>
                                    <a href="pricing.php"><i class="zmdi zmdi-money-box"></i>subscription</a>
                                </li>
                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

       <div class="page-container">
<header class="header-desktop">

                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input id="myInputTextField" class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                    <?php
                                         $notif = "SELECT *,count(*) as 'nbr' from notif";
                                         $resme = mysqli_query($conn,$notif);
                                        while( $lign = mysqli_fetch_assoc($resme))
                                            {?>
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity"><?= $lign['nbr'];?></span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have <?= $lign['nbr'];?> Notification</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <a onclick="showNotification();">
                                                <div class="content">
                                                    <p><?= $lign['title'];?></p>
                                                    <span class="date"><?= $lign['notif_time'];?></span>
                                                    
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <?php echo "<img src=".  $_SESSION['img']. " alt=\"John Doe\" />";  ?>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['name']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <?php echo "<img src=".  $_SESSION['img']. " alt=\"John Doe\" />";  ?>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['name']; ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['email']; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="profile.php">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                               
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>subscription</a>

                                                     <a href="#" onclick="confirme();">
                                                    <i class="zmdi zmdi-power" ></i>Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <style type="text/css">
    .fc-content{
        height: 50px;
        font-size: 16px;
        color: black;
    }
    .fc-title{
        margin-top: 30px;
    }
    .float{
    position:fixed;
    width:60px;
    height:60px;
    bottom:40px;
    right:40px;
    background-color:#25d366;
    color:#FFF;
    border-radius:50px;
    text-align:center;
  font-size:30px;
    box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
    margin-top:16px;
}
   </style>
   <a data-toggle="tooltip" title="i have a problem with the system" href="https://api.whatsapp.com/send?phone=212625881150&text=i have a problem with the system,please help." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
   </a>
