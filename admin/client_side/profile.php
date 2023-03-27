 <?php include 'header.php';
 session_start();
 include '../../dbcon.php';
  ?>
 <head>
     <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/red-color.css">
    <link rel="stylesheet" href="assets/css/yellow-color.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

 </head>
<div class="header-dinner parallax0 parallax100 " style="background-image: url(images/ali-morshedlou-593422-unsplash.jpg);">
            <div class="bg1-overlay t-center p-t-170 p-b-165">
                <h2 class="tit4 t-center">
                    Profile
                </h2>
            </div>
        </div>

        <section>
            <div class="block less-spacing gray-bg top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="dashboard-tabs-wrapper">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-lg-4">
                                            <div class="profile-sidebar brd-rd5 wow fadeIn" data-wow-delay="0.2s">
                                                <div class="profile-sidebar-inner brd-rd5">
                                                    <div class="user-info red-bg">
                                                        <img class="brd-rd50" src="../<?php echo $_SESSION['img']; ?>" alt="user-avatar.jpg" itemprop="image">
                                                        <div class="user-info-inner">
                                                            <h5 itemprop="headline"><a href="#" title="" itemprop="url"><?php echo $_SESSION['name']; ?></a></h5>
                                                            <span><a href="#" title="" itemprop="url"><?php echo $_SESSION['email']; ?></a></span>
                                                            <a class="brd-rd3 sign-out-btn yellow-bg" href="../../logout.php" title="" itemprop="url"><i class="fa fa-sign-out"></i> SIGN OUT</a>
                                                        </div>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="#dashboard" data-toggle="tab"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
                                                        <li><a href="#my-bookings" data-toggle="tab"><i class="fa fa-file-text"></i> MY BOOKINGS</a></li>
                                                        <li><a href="#my-reviews" data-toggle="tab"><i class="fa fa-comments"></i> MY REVIEWS</a></li>
                                                        <li><a href="#my-orders" data-toggle="tab"><i class="fa fa-shopping-basket"></i> MY ORDERS</a></li>
                                                        <li><a href="#account-settings" data-toggle="tab"><i class="fa fa-cog"></i> ACCOUNT SETTINGS</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-12 col-lg-8">
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="dashboard">
                                                    <div class="dashboard-wrapper brd-rd5">
                                                        <div class="welcome-note yellow-bg brd-rd5">
                                                            <h4 itemprop="headline">WELCOME TO YOUR ACCOUNT</h4>
                                                            <p itemprop="description">Things that get tricky are things like burgers and fries, or things that are deep-fried. We do have a couple of burger restaurants that are capable of doing a good</p>
                                                            <img src="assets/images/resource/welcome-note-img.png" alt="welcome-note-img.png" itemprop="image">
                                                            <a class="remove-noti" href="#" title="" itemprop="url"><img src="assets/images/close-icon.png" alt="close-icon.png" itemprop="image"></a>
                                                        </div>
                                                        <div class="restaurants-list">
                                                            <div class="featured-restaurant-box style3 brd-rd5 wow fadeInUp" data-wow-delay="0.2s">
                                                                <div class="featured-restaurant-thumb"><a href="#" title="" itemprop="url"><img src="images/icons/logo.png" alt="restaurant-logo1-1.png" itemprop="image"></a></div>
                                                                <div class="featured-restaurant-info">
                                                                    <span class="red-clr">5th Avenue New York 68</span>
                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">RAVIOLI'S</a></h4>
                                                                    <ul class="post-meta">
                                                                        <li><i class="fa fa-check-circle-o"></i> max order $150</li>
                                                                        <li><i class="flaticon-transport"></i> 30min</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="view-menu-liks">
                                                                    <span class="red-bg brd-rd4 post-likes"><i class="fa fa-heart-o"></i> 2</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="my-bookings">
                                                    <div class="tabs-wrp brd-rd5">
                                                        <h4 itemprop="headline">MY BOOKINGS</h4>
                                                       
                                                        <div class="booking-table">
                                                            <table>
                                                                <thead>
                                                                    <tr><th>RESTAURANT NAME</th><th>DATE</th><th>STATUS</th></tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><h5 itemprop="headline"><a href="#" title="" itemprop="url">RAVIOLI'S</a></h5></td>
                                                                        <td>Aug 17,2019</td>
                                                                        <td><span class="brd-rd3 processing">PROCESSING</span></td>
                                                                    </tr>
                                                                   
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="my-reviews">
                                                    <div class="tabs-wrp brd-rd5">
                                                        <h4 itemprop="headline">MY REVIEWS</h4>
                                                        <div class="review-list">
                                                            <div class="review-box brd-rd5">
                                                                <h4 itemprop="headline"><a href="index.php" title="" itemprop="url">RESTAURANT RAVIOLI'S</a></h4>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star on"></i>
                                                                </div>
                                                                <p itemprop="description">FoodBakery order today. So great to be able to order food and not have to talk to anyone.</p>
                                                                <div class="review-info">
                                                                    <img class="brd-rd50" style="max-height: 100px;" src="../<?php echo $_SESSION['img']; ?>" alt="reviewr-img1.jpg" itemprop="image">
                                                                    <div class="review-info-inner">
                                                                        <h5 itemprop="headline">GHARIB MOHAMMED</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- Review List -->
                                                    </div>
                                                </div>
                                                <?php       $query = " SELECT * FROM panier INNER JOIN plat ON plat.id = panier.plat WHERE client =".$_SESSION['client']; 
                                                            $stmt = $conn->prepare($query);
                                                            $result = $conn->query($query); ?>
                                                <div class="tab-pane fade" id="my-orders">
                                                    <div class="tabs-wrp brd-rd5">
                                                        <h4 itemprop="headline">MY ORDERS</h4>
                                                        <?php while ($row = $result->fetch_assoc()) {?>
                                                        <div class="order-list" >
                                                            <div class="order-item brd-rd5">
                                                                <div class="order-thumb brd-rd5">
                                                                    <a href="#" style="height: 150px;" title="" itemprop="url"><img src="<?=$row['image'];?>" alt="order-img1.jpg" itemprop="image"></a>
                                                                    <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> <?=$row['rate'];?></span>
                                                                </div>
                                                                <div class="order-info">
                                                                    <span class="red-clr"><?=$row['type'];?></span>
                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url"><?= $row['nom'];?></a></h4>
                                                                    
                                                                    <span class="price"><?=$row['prix'];?>MAD</span>
                                                                    <span class="processing brd-rd3">PROCESSING</span>  
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="account-settings">
                                                    <div class="tabs-wrp account-settings brd-rd5">
                                                        <h4 itemprop="headline">ACCOUNT SETTINGS</h4>
                                                        <div class="account-settings-inner">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                                    <div class="profile-info text-center">
                                                                        <div class="profile-thumb brd-rd50">
                                                                            <img id="profile-display" src="../<?php echo $_SESSION['img']; ?>" alt="profile-img1.jpg" itemprop="image">
                                                                        </div>
                                                                        <a class="red-clr change-password" href="#" title="" itemprop="url">Change Password</a>
                                                                        <div class="profile-img-upload-btn">
                                                                            <label class="fileContainer brd-rd5 yellow-bg">
                                                                                UPLOAD PICTURE
                                                                                <input id="profile-upload" type="file"/>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-8 col-lg-8">
                                                                    <div class="profile-info-form-wrap">
                                                                        <form class="profile-info-form">
                                                                            <div class="row mrg20">
                                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                    <label>Complete Name <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="text" placeholder="Enter Your Name">
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                    <label>Email Address <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="email" placeholder="Enter Your Email Address">
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                    <label>Phone No <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="text" placeholder="Enter Your Phone No">
                                                                                </div>
                                                                                
                                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                    <label>Latitude <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="text">
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                    <label>Longitude <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="text">
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Section Box -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <script src="assets/js/main.js"></script>

<?php include 'footer.php'; ?>
