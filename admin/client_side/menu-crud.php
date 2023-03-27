<?php  
	session_start();
	include('../../dbcon.php');

	//plat principal 
	echo $_SESSION['restofolow']; 
		$query = " SELECT *,plat.image as 'img',plat.id as 'platid',plat.type as 'tp' FROM plat inner join menu on menu.id = plat.menu where plat.type = 'Plat Principal'and restaurant=".$_SESSION['restofolow'] ; 
 		$stmt = $conn->prepare($query);
		$result = $conn->query($query);

	// dessert
		$query2 = " SELECT *,plat.image as 'img',plat.id as 'platid',plat.type as 'tp' FROM plat inner join menu on menu.id = plat.menu where  plat.type = 'Dessert' and restaurant=".$_SESSION['restofolow'] ; 
 		$stmt = $conn->prepare($query2);
		$result2 = $conn->query($query2);

	// drinks 

		$query3 = " SELECT *,plat.image as 'img',plat.id as 'platid',plat.type as 'tp' FROM plat inner join menu on menu.id = plat.menu where  plat.type = 'Drink' and restaurant=".$_SESSION['restofolow'] ; 
 		$stmt = $conn->prepare($query3);
		$result3 = $conn->query($query3);

	//plat secondaire
		
		$query4 = "SELECT *,plat.image as 'img',plat.id as 'platid',plat.type as 'tp' FROM plat inner join menu on menu.id = plat.menu where  plat.type = 'Plat Secondaire' and restaurant=".$_SESSION['restofolow']; 
 		$stmt = $conn->prepare($query4);
		$result4 = $conn->query($query4);

?>