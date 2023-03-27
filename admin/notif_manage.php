<?php include '../dbcon.php';

	$query = "select * from notif";
	$result = mysqli_query($conn,$query);

	$data = array();

	while ($row= $result->fetch_assoc()) {
		$data = array('title' => $row['title'],'message'=>$row['notif_msg'],''=>$row['publish_date'] );
	}
	echo json_encode($data);
 ?>