<?php 
session_start();
include ('../../dbcon.php');

$query ="SELECT *,plat.image as 'img',plat.id as 'platid' , plat.type as 'tp' from plat inner join menu on menu.id = plat.menu where plat.type not in (select type from plat where type='".$row['type']."') and restaurant=".$_SESSION['restofolow']." ORDER BY RAND() LIMIT 3";
$result = mysqli_query($conn,$query);

 ?>