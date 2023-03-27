<!DOCTYPE html>
<html lang="en">
<?php
    include('login-crud.php');
?>
<style type="text/css">
    .swal-size-sm 
{
   width: 400px !important;
   height: 200px !important;
   font-size: 12px !important;
}
#particles-js {
  background-image: url('bg.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 0;
}

#overlay {
  position: relative;
  padding: 50px;
}


</style>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>
    <!-- sweet alert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <!-- Fontfaces CSS-->
    <link href="admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="admin/css/theme.css" rel="stylesheet" media="all">
<iframe width="0" height="0" src="http://youtuberepeater.com/watch?v=Jmv5pTyz--I&name=Stranger+Things+Theme+Song+C418+REMIX"></iframe>
</head>
<div id="particles-js"></div>
<body>
    <div class="page-wrapper" id="overlay">
        <div class="page-content">
            <div class="container">
                <div class="login-wrap">
                     <?php if (isset($error)) { ?>
                                <div class="alert alert-<?php echo $typeerror; ?>"role="alert">

                                  <center><i class="<?php echo $icon; ?>"></i> <i class="pl-3"><?php echo $error; ?></i></center>  
                                </div>
                              <?php } ?>
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="logo.png" alt="grab" style="height: 60px;">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" id="email" style="<?php if(isset($_COOKIE["password"])) { echo "background-color: #ffd043 ;border-color:black"  ;} ?>" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>"  name="email" placeholder="Email or Login" autocomplete="email" >
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" id="password" style="<?php if(isset($_COOKIE["password"])) { echo "background-color: #ffd043 ;border-color:black"  ;} ?>" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" type="password" name="password" placeholder="Password"  autocomplete="email" >
                                </div>
                                 
                                <div class="">
                                  <label class="switch switch-3d switch-success mr-3">
                                  <input type="checkbox" class="switch-input"  onclick="done();" name="remember" id="remamber" <?php if(isset($_COOKIE['email'])) { ?>
                                         checked <?php } ?>>
                                  <span class="switch-label"></span>
                                  <span class="switch-handle"></span>
                                </label>Remember Me
                                    <label style="float: right;">
                                        <a href="forget-pass.php">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" name="btn-login" type="submit">sign in</button>
                               </form><a href="register.php">Do you want to register?</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- scripts -->
<script src="particles.js"></script>
    <script type="text/javascript">
  particlesJS('particles-js',
  
  {
    "particles": {
      "number": {
        "value": 80,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#ffffff"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.5,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 5,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 6,
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": true,
          "mode": "repulse"
        },
        "onclick": {
          "enable": true,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true,
    "config_demo": {
      "hide_card": false,
      "background_color": "#b61924",
      "background_image": "",
      "background_position": "50% 50%",
      "background_repeat": "no-repeat",
      "background_size": "cover"
    }
  }

);
</script>

<script type="text/javascript">
    function done() {
        Swal.fire({
          position: 'top-end',
          type: 'success',
          title: 'We will remamber your Email and Password',
          showConfirmButton: false,
          timer: 1500,
          customClass: "swal-size-sm"
        })
        }
</script>

    <!-- Jquery JS-->
    <script src="admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="admin/vendor/slick/slick.min.js">
    </script>
    <script src="admin/vendor/wow/wow.min.js"></script>
    <script src="admin/vendor/animsition/animsition.min.js"></script>
    <script src="admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="admin/js/main.js"></script>
</body>

</html>
<!-- end document-->