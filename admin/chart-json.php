<?php include '../dbcon.php';

$query="SELECT COUNT(*) as 'me',type FROM plat  GROUP BY type";
	$stmt = $conn->prepare($query);
    $final = $conn->query($query);
	$data  = array();
	//'t'=>$clock['type']

    while($clock = mysqli_fetch_assoc($final)) {
        $data[] = array('n'=>$clock['me'],
    					't'=>$clock['type'],
    					'color'=>$rand_color = "#".substr(md5(rand()), 0, 6),);
    }
      
    echo json_encode($data);
 ?>