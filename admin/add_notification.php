<?php  ?>
<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
	<title>add notification</title>

<body>

   
<div class="">
    <div class="main-content">
    	<div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row"> 	
                        <div class="col-lg-10 offset-md-1">
                                <div class="card">
                                	<dir class="card-header">
                                        <center><i><h5>Add New Notification:</h5></i></center>
                                    </dir>
	                    			<div class="card-body">
	                                    <div class="row">
											<div class="col-sm-12">
												
												<form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">										
													<table class="table borderless">
														<tr>
															<td>Title</td>
															<td><input type="text" name="title" class="form-control" required></td>
														</tr>	
														<tr>
															<td>Message</td>
															<td><textarea name="msg" cols="50" rows="4" class="form-control" required></textarea></td>
														</tr>			
														<tr>
															<td>Broadcast time</td>
															<td><select name="time" class="form-control"><option>Now</option></select> </td>
														</tr>

														<tr>
															<td colspan=1></td>
															<td colspan=1></td>
														</tr>					
														<tr>
															<td colspan=1></td>
															<td><button name="submit" type="submit" class="btn btn-info">Add Message</button></td>
														</tr>
													</table>
												</form>
											</div>
										</div>

										<?php 
										if (isset($_POST['submit'])) { 
											if(isset($_POST['msg']) and isset($_POST['time']) and isset($_POST['title']) and isset($_POST['submit'])) {
												$title = $_POST['title'];	
												$msg = $_POST['msg']; 
												$time = date('Y-m-d H:i:s'); 

											$query ="INSERT INTO `notif`(`id`, `title`, `notif_msg`, `notif_time` ) VALUES ('','$title','$msg','$time')";
											$result = mysqli_query($conn,$query);
											 }
											}?>

											<table class="table table-responsive" style="padding-left: 20%;">
												<tr>
												<th>title</th>
												<th>message</th>
												<th>Date</th>
												<th>delete / update</th>
												</tr>

												<?php
												$query ="select * from notif";
												$result = mysqli_query($conn,$query);
												 while ($row = mysqli_fetch_assoc($result)) {
													
												?>
												<tr>
													<td><?= $row['title'] ?></td>
													<td><?= $row['notif_msg'] ?><?= $row['title'] ?></td>
													<td><?= $row['notif_time'] ?></td>
													<td><a href="">Delete</a>&nbsp;&nbsp;
														<a href="">Update</a>
													</td>
												</tr>
											<?php } ?>
											</table>
	                                </div>
                    			</div>
	                   		</div>
                    	</div>
					</div>
				</div>
			</div>
		</div>
	</body>
<?php include 'footer.php'; ?>
</html>