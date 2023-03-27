<?php
session_start();
include('../../dbcon.php');


if (isset($_GET['id'])) {
		$query = " SELECT * FROM plat where id =".$_GET['id']; 
 		$stmt = $conn->prepare($query);
		$result = $conn->query($query);
		$row= $result->fetch_assoc();
		//dessert
		$query2 = "SELECT *,plat.image as 'img',plat.id as 'platid' , plat.type as 'tp' from plat inner join menu on menu.id = plat.menu where plat.type not in (select type from plat where type='".$row['type']."') and restaurant=".$_SESSION['restofolow']." ORDER BY RAND() LIMIT 3"; 
 		$stmt = $conn->prepare($query2);
		$result2 = $conn->query($query2);

		$query3 = "SELECT TRUNCATE(sum(prix), 2) as 'prix-total' from plat where type not in (select type from plat where type='".$row['type']."') ORDER BY RAND() LIMIT 3"; 
 		$stmt = $conn->prepare($query3);
		$result3 = $conn->query($query3);
		$row3= $result3->fetch_assoc();

}
 ?>