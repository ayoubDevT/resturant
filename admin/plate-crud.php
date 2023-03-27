<?php 
include('../dbcon.php');

//select
		$query = " SELECT *,plat.image as 'img',plat.id as 'platid',plat.type as'typeplat' FROM plat inner join menu on menu.id = plat.menu where restaurant=".$_SESSION['resto']; 
 		$stmt = $conn->prepare($query);
		$result = $conn->query($query);

?>