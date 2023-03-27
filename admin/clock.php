<html>
<?php include 'header.php'; ?>
	<head>
		<link rel="stylesheet" href="vendor/compiled/flipclock.css">		
	</head>
	<style type="text/css">
		.me{
			padding-left: 25%;
		}
		@media (max-width: 400px)
		{
			.me{
			padding-left: 5%;
		}
		}
	</style>

		<div class="">
    <div class="main-content">
    	<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        	
                        	   <div class="col-lg-10 offset-md-1">
                                <div class="card">
                                	<dir class="card-header">
                                        <center>
                                            <i>Set an event </i>
                                        </center>
                                    </dir>
                    			<div class="card-body">
                                    <div class="clock col col-md-12 me" ></div>
                                    <div class="col col-md-12">
                                    	<hr>
                                    	<br>
                                    	<div class="form-group">
                                    		<span>Nom:</span>
                                    		<input type="text" name="" class="form-control" placeholder="nom">
                                    	</div>
                                    	<div class="form-group">
                                    		<span>image:</span>
                                    		<input type="file" name="" class="form-control">
                                    	</div>
                                    	<div class="form-group">
                                    		<span>Date de evenement:</span>
                                    		<input type="date" name="" class="form-control">
                                    	</div>
                                    	<div class="form-group">
                                    		<span>prix:</span>
                                    		<input type="number" name="" class="form-control" placeholder="$$$">
                                    	</div>

                                    	<input type="submit" name="" value="Set event" class="btn bn-info">

                                    </div>
                                </div>
                    		</div>
	                   </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

		<script type="text/javascript">
			var clock;
			
			$(document).ready(function() {
				var date = new Date();

				clock = $('.clock').FlipClock(date, {
					clockFace: 'TwentyFourHourClock'
				});
			});
		</script>
 <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
       </script>
    <!-- Main JS-->
    <script src="js/main.js"></script>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="vendor/compiled/flipclock.js"></script>
  



</html>