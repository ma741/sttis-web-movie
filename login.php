<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Askbootstrap">
   <meta name="author" content="Askbootstrap">
   <title>Kampus Cinema</title>
   <!-- Favicon Icon -->
   <link rel="icon" type="image/png" href="assets/img/logo_besar.png">
   <!-- Bootstrap core CSS-->
   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <!-- Custom fonts for this template-->
   <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <!-- Custom styles for this template-->
   <link href="assets/css/osahan.css" rel="stylesheet">
   <!-- Owl Carousel -->
   <link rel="stylesheet" href="assets/vendor/owl-carousel/owl.carousel.css">
   <link rel="stylesheet" href="assets/vendor/owl-carousel/owl.theme.css">
   <style type="text/css">
      .color-form {
         color: #fff;
      }
   </style>
</head>



<body class="login-main-body">
   <section class="login-main-wrapper">
      <div class="container-fluid pl-0 pr-0">
         <div class="row no-gutters">

            <div class="col-md-5 p-5 full-height" style="background-color: #393D5E">
               <div class="login-main-left">
                  <div class="text-center mb-5 login-main-left-header pt-4">

                     <img src="assets/img/logo_besar.png" class="img-fluid" alt="LOGO" style="width: 50%;">
                     <h5 class="mt-3 ">Welcome to Vidoe</h5>
                     <p>It is a long established fact that a reader <br> will be distracted by the readable.</p>
                  </div>

                  <?php
                  if (isset($_GET['pesan'])) {

                     if ($_GET['pesan'] == "no_email") {

                        echo "<div class='alert alert-danger text-center'>Email dan Password salah !</div>";
                     } else if ($_GET['pesan'] == "no_ver") {

                        echo "<div class='alert alert-warning text-center'>Anda belum verifikasi akun !</div>";
                     } else if ($_GET['pesan'] == "no_pass") {
                        echo "<div class='alert alert-danger text-center'>Password anda salah !</div>";
                     } else if ($_GET['pesan'] == "logout") {
                        echo "<div class='alert alert-success text-center'>Anda berhasil logout</div>";
                     } else if ($_GET['pesan'] == "no_login") {
                        echo "<div class='alert alert-danger text-center'>Anda belum login !</div>";
                     } else if ($_GET['pesan'] == "please_login") {
                        echo "<div class='alert alert-warning text-center'>Silahkan cek email untuk verifikasi Email !</div>";
                     } else if ($_GET['pesan'] == "ver_suc") {
                        echo "<div class='alert alert-success text-center'>Verifikasi akun sukses silahkan login</div>";
                     }
                  }

                  ?>

                  <form action="proses/loginProses.php" method="POST">

                     <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control color-form" placeholder="Enter Email">
                     </div>
                     <div class="form-group">
                        <label>Password</label> <label class="float-right"><a href="forgot_password.php" class="text-danger">Forgot Password ?</a></label>
                        <input type="password" name="password" class="form-control color-form" placeholder="Password">
                     </div>

                     <div class="mt-4">
                        <div class="row">
                           <div class="col-12">
                              <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Sign In</button>
                           </div>
                        </div>
                     </div>
                  </form>
                  <div class="text-center mt-3">
                     <p class="light-gray">
                        Don’t have an account? <a href="register.php" class="text-success">Sign Up</a><br>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-7">
               <div class="login-main-right bg-white p-5 mt-5 mb-5">
                  <div class="owl-carousel owl-carousel-login">
                     <div class="item">
                        <div class="carousel-login-card text-center">
                           <img src="assets/img/login.png" class="img-fluid" alt="LOGO">
                           <h5 class="mt-5 mb-3">​Watch videos offline</h5>
                           <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="carousel-login-card text-center">
                           <img src="assets/img/login.png" class="img-fluid" alt="LOGO">
                           <h5 class="mt-5 mb-3">Download videos effortlessly</h5>
                           <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="carousel-login-card text-center">
                           <img src="assets/img/login.png" class="img-fluid" alt="LOGO">
                           <h5 class="mt-5 mb-3">Create GIFs</h5>
                           <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Bootstrap core JavaScript-->
   <script src="assets/vendor/jquery/jquery.min.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- Core plugin JavaScript-->
   <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
   <!-- Owl Carousel -->
   <script src="assets/vendor/owl-carousel/owl.carousel.js"></script>
   <!-- Custom scripts for all pages-->
   <script src="assets/js/custom.js"></script>
</body>

</html>