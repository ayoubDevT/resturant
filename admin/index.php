<?php
include('header.php');

?>
<script
  src="vendor/jquery-3.2.1.min.js"></script>

       <title>Home</title>     <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">tableux de borde</h2>
                                    <div class="col-lg-3">

                                        <a href="plate.php">
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add plat</button></a>
                                     <a href="client_side/index.php">
                                    <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="fa fa-globe"></i>visit site</button></a>

                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <?php 
                                              $sql = "SELECT COUNT(*) AS 'nomber client' FROM `client` ";
                                              $result = mysqli_query($conn, $sql);
                                              $count = mysqli_num_rows($result);
                                              $row = mysqli_fetch_assoc($result) ?>
                                            <div class="text">
                                                <h2><?php echo $row['nomber client']; ?></h2>
                                                <span>client enregistre</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                             <?php 
                                              $sql = "SELECT COUNT(*) AS 'nomber reservation' FROM `panier` ";
                                              $result = mysqli_query($conn, $sql);
                                              $count = mysqli_num_rows($result);
                                              $row = mysqli_fetch_assoc($result) ?>
                                            <div class="text">
                                                <h2><?php echo $row['nomber reservation']; ?></h2>
                                                <span>plate reserved</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <?php 
                                              $sql = "SELECT COUNT(*) AS 'nomber plat' FROM `plat` ";
                                              $result = mysqli_query($conn, $sql);
                                              $count = mysqli_num_rows($result);
                                              $row = mysqli_fetch_assoc($result) ?>
                                            <div class="text">
                                                <h2><?php echo $row['nomber plat']; ?></h2>
                                                <span>Plat added</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <?php 
                                              $sql = "SELECT TRUNCATE(sum(prix), 2) AS 'prix' FROM `plat` ";
                                              $result = mysqli_query($conn, $sql);
                                              $count = mysqli_num_rows($result);
                                              $row = mysqli_fetch_assoc($result) ?>
                                            <div class="text">
                                                <h2>$<?php echo $row['prix']; ?></h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Single Bar Chart</h3>
                                        <canvas id="singelBarChart"></canvas>
                                    </div>
                                </div>
                            </div>
                              <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Line Chart</h3>
                                        <canvas id="lineChart"></canvas>
                                    </div>
                                </div>
                            </div>
                              <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Polar Chart</h3>
                                        <canvas id="polarChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2019 </p>
                </div>  
            </div>
        </div>

 <?php
include('footer.php');
?>