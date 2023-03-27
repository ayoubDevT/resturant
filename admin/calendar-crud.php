<?php 
include '../dbcon.php';
$sql = "SELECT reservation.id,date,date_reservation,client,email,img FROM reservation INNER JOIN client ON reservation.client=client.id INNER JOIN compte ON compte.id=client.compte";
$resultr = mysqli_query($conn, $sql);
if (mysqli_num_rows($resultr) > 0) {
    // output data of each row
        $data  = array();

    while($rowr = mysqli_fetch_assoc($resultr)) {
        $data[] = array('id'=>$rowr['id'],
        				'title'=>$rowr['email'],
        				'end'=>$rowr['date_reservation'],
                        'start'=>$rowr['date'],
                        'color'=>$rand_color = "#".substr(md5(rand()), 0, 6),
                        'imageurl'=>$rowr['img']);
		
}
}
echo json_encode($data);




 ?>