<?php
include_once('dbcon.php');
session_start();


$error = false;
if(isset($_POST['btn-login'])){
    $email = trim($_POST['email']);
    $email = htmlspecialchars(strip_tags($email));

    $password = trim($_POST['password']);
    $password = htmlspecialchars(strip_tags($password));

    if(empty($email)){
        $error = true;

        $typeerror = "danger";
    $error = "Merci de romplire le email";
    $icon ="fas fa-exclamation-triangle faa-flash animated";
    }

    if(empty($password)){
        $error = true;
        $typeerror = "danger";
        $error = "Merci de romplire le motedepass";
        $icon ="fas fa-exclamation-triangqle faa-flash animated";

        $errorPassword = 'Merci de romplire le motedepass';
    }elseif(strlen($password)< 1){
        $error = true;

        $typeerror = "danger";
        $error = "le mote de pass doit etre au moin 8 character ";
        $icon ="fas fa-exclamation-triangle faa-flash animated";
    }

    if(!$error){
        $password = md5($password);
        $sql = "SELECT compte.login,compte.verification,compte.email,compte.password,compte.img,compte.id AS'compte',client.id AS 'client',admin.code AS 'admin',superadmin.id AS 'superadmin'
    FROM    compte LEFT OUTER JOIN client ON
    compte.id = client.compte LEFT OUTER JOIN admin ON compte.id = admin.compte
    LEFT OUTER JOIN superadmin ON compte.id = superadmin.compte WHERE compte.email ='$email' OR compte.login ='$email' AND compte.password ='$password'";

        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);

        if($count==1 && $row['password'] == $password){

            $_SESSION['email']=$row["email"];
            $_SESSION['password']=$row["password"];
            $_SESSION['name']=$row["login"];
            $_SESSION['img']=$row["img"];
            $_SESSION['id']=$row["compte"];
            $_SESSION['verification']=$row["verification"];
            $client =  $row['client'];
            $admin =  $row['admin'];
            $superadmin =  $row['superadmin'];

            
                    setcookie ("email",$_POST["email"],time()+ (1 * 365 * 24 * 60 * 60));
                    setcookie ("password",$_POST["password"],time()+ (1 * 365 * 24 * 60 * 60));
              


                if (!is_null($admin)) {
                    $query5 = "select id from restaurant where admin=".$row['admin'];
                    $stmt = $conn->prepare($query5);
                    $result5 = $conn->query($query5);
                    $row5 = $result5->fetch_assoc();
                    $_SESSION['resto']= $row5['id'];


                    $error = "succsses good job ".$_SESSION['name'];
                    $typeerror = "success ";
                    $icon ="fas fa-check-circle faa-flash animated";
                    header('refresh:1;url=admin/index.php');

                }elseif (!is_null($client)) {
                    $query4 ="select * from client where compte=".$_SESSION['id'];
                    $stmt = $conn->prepare($query4);
                    $result4 = $conn->query($query4);
                    $row4 = $result4->fetch_assoc();
                    $_SESSION['client'] = $row4['id'];

                    $query5 ="select * from follow where client=".$_SESSION['client'];
                    $stmt = $conn->prepare($query5);
                    $result5 = $conn->query($query5);
                    $row5 = $result5->fetch_assoc();
                    $_SESSION['restofolow'] = $row5['restaurant'];

                    $error = "succsses good job ".$_SESSION['name'].$_SESSION['restofolow'].$_SESSION['client'];
                    $typeerror = "success ";
                    $icon ="fas fa-check-circle faa-spin animated";

                    header('refresh:1;url=admin/client_side/home.php');
                }elseif (!is_null($superadmin)) {
                    $error = "Welcome supperadmin ".$_SESSION['name'];
                    $typeerror = "success ";
                    $icon ="fas fa-check-circle faa-spin animated";

                    header('refresh:1;url=superadmin/index2.php');
                }

            }

            else{
                $typeerror = "danger";
                $error = "Invalid Email or Password ";
                $icon ="fas fa-exclamation-triangle faa-flash animated";

        }
    }
}

 ?>
