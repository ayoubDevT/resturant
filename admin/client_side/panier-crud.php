<?php

 		$query = " SELECT * FROM panier INNER JOIN plat ON plat.id = panier.plat WHERE client =".$_SESSION['client']; 
 		$stmt = $conn->prepare($query);
		$result = $conn->query($query);

    $query1 = " SELECT * FROM panier INNER JOIN plat ON plat.id = panier.plat WHERE client =".$_SESSION['client']; 
    $stmt = $conn->prepare($query1);
    $result22 = $conn->query($query1);

		if (isset($_GET['delete'])) {
  		$queryss = " DELETE from panier where plat=".$_GET['delete']; 
        $stmt = $conn->prepare($queryss);
        $resultss = $conn->query($queryss);
        echo '<meta http-equiv="refresh" content= "0;URL=?mc=mobile" />';
          mysqli_error($conn);
        }

        $que = " SELECT prix,quantity FROM panier INNER JOIN plat ON plat.id = panier.plat WHERE restaurant=".$_SESSION['restofolow']; 
 		$stmt = $conn->prepare($que);
		$ress = $conn->query($que);
		?>