<!DOCTYPE html>
<html>
<head>
	<title>register</title>
<script src="/js/my.js"></script>
</head>
<body>
<?php include 'header.php';
// include '../session.php';
include'restaurant-crud.php';
?>
<section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <br><br><br><br><br><br>
<div class="page-wrapper">
        <div class="page-content">
            <div class="container ">
                <div class="login-wrap">
                    <div class="login-content">
                        
                          <?php if (isset($error)) { ?>
                                <div class="alert alert-<?php echo $typeerror; ?>" role="alert">

                                  <center><i class="<?php echo $icon; ?>"></i> <i class="pl-3"><?php echo $error; ?></i></center>  
                                </div>
                          <?php } ?>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group m-b-20">
                                    <label>Confirme Password</label>
                                    <input class="au-input au-input--full" type="password" name="confirmepassword" placeholder="Confirme Password"><br>
                                </div>
                                

                                <button class="au-btn au-btn--block au-btn--green m-b-20" name="register" type="submit" id="submit">register</button>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br>
        </div>
        </div>
    </div>
</section>
</body>
</html>

<?php include 'footer.php'; ?>
</body>
</html>