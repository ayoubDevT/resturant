<?php 
include '../../dbcon.php';
	$date="SELECT DAY(DATEDIFF(now(), date)) as `DAY`,abs(HOUR(TIMEDIFF(now(), date))) as `HOUR`,MINUTE(TIMEDIFF(now(), date)) as `MINUTE`,SECOND(TIMEDIFF(now(), date)) as `SECOND` FROM event ";

	$stmt = $conn->prepare($date);
    $final = $conn->query($date);
	$data  = array();

    while($clock = mysqli_fetch_assoc($final)) {
        $data['clock'][] = array('DAY'=>$clock['DAY'],
        				'HOUR'=>$clock['HOUR'],
        				'MINUTE'=>$clock['MINUTE'],
                        'SECOND'=>$clock['SECOND']);
    }
    
    echo json_encode($data);
	 ?>