<?php
include '../dbcon.php';
 if (isset($_GET['delete'])) {
  $d1=$conn->prepare("delete from plat where id=".$_GET['delete']);
          $d1->execute();
          header('location:plate.php');
        } ?>