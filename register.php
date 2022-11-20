<!DOCTYPE php>
<php lang="en">

   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <title>VIDOE - </title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="assets/img/favicon.png">
      <!-- Bootstrap core CSS-->
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="assets/css/osahan.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="assets/vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="assets/vendor/owl-carousel/owl.theme.css">
   </head>




   <body id="page-top">
      <nav class="warna-navbar navbar navbar-expand navbar-dark  static-top osahan-nav sticky-top">
         &nbsp;&nbsp;
         <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
            <i class="fas fa-bars"></i>
         </button>
         &nbsp;&nbsp;
         <a class="navbar-brand mr-1" href="index.html"><img class="img-fluid" alt="" src="assets/img/logo.png" /></a>
         <!-- Navbar Search -->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Search for...">
               <div class="input-group-append">
                  <button class="btn btn-light" type="button">
                     <i class="fas fa-search"></i>
                  </button>
               </div>
            </div>
         </form>

         <a href="login.php" class="btn btn-outline-primary  text-success m-1">
            <i class="fas fa-fw fa-user-circle "></i> Sig in
         </a>



      </nav>

      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="warna-navbar sidebar  navbar-nav">
            <li class="nav-item active">
               <a class="nav-link" href="index.php">
                  <i class="fas fa-fw fa-home"></i>
                  <span>Home</span>
               </a>
            </li>

            <li class="nav-item">
               <a class="nav-link" href="video-page.php">
                  <i class="fas fa-fw fa-video"></i>
                  <span>Video Page</span>
               </a>
            </li>

           
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="categories.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-fw fa-list-alt"></i>
                  <span>Categories</span>
               </a>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="categories.php">Movie</a>
                  <a class="dropdown-item" href="categories.php">Music</a>
                  <a class="dropdown-item" href="categories.php">Television</a>
               </div>
            </li>

         </ul>

         <div id="content-wrapper">
            <div class="container-fluid upload-details">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="main-title">
                        <h6 class="text-white">Register</h6>
                     </div>
                  </div>
               </div>
               <form action="proses/registerProses.php" method="post" enctype="multipart/form-data">

                  <div class="">
                     <label class="" for="">Foto Profile *</label>
                     <input type="file" name="foto" class="form-control" required="required">
                  </div>



                  <div class="form-group">
                     <label>Full Name *</label>
                     <input type="text" name="fullname" placeholder="full name" class="form-control" required="required">
                  </div>

                  <div class="form-row">
                     <div class="col-md-6">
                        <label for="username">Username *</label>
                        <input type="text" name="username" id="username" placeholder="username" class="form-control" required="required">
                     </div>
                     <div class="col-md-6">
                        <label>Date Of Birth *</label>
                        <input type="date" name="date_of_birth" placeholder="date of birth" class="form-control" required="required">
                     </div>
                  </div>

                  <div class="form-row">
                     <div class="col-md-6">
                        <label>Email *</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required="required">
                     </div>
                     <div class="col-md-6">
                        <label>Phone *</label>
                        <input type="text" name="phone" class="form-control" placeholder="phone " required="required">
                     </div>
                  </div>

                  <div class="form-row">
                     <div class="col-md-6">
                        <label for="">Password *</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" required="required">
                     </div>
                     <div class="col-md-6">
                        <label>Account Status *</label>
                        <select name="account_status" class="form-control" required="required">
                           <option value="">- pilih -</option>
                           <option value="Mahasiswa">Mahasiswa</option>
                           <option value="Umum">Umum</option>
                        </select>
                     </div>

                  </div>



                  <div class="form-row">
                     <div class="col-md-6">
                        <label for="">Address *</label>
                        <textarea name="address" class="form-control border-form-control" required="required"></textarea>
                     </div>
                     <div class="col-md-6">
                        <label for="">Role name *</label>
                        <select name="role_name" class="form-control" required="required">
                           <option value="">- pilih -</option>
                           <option value="Viewer">Viewer</option>
                           <option value="Uploader">Uploader</option>
                           <option value="Admin">Admin</option>
                        </select>
                     </div>
                  </div>


                  <!-- <button type="submit" class="btn btn-danger btn-sm float-right mt-3 ml-1">Cancel</button> -->
                  <button type="submit" name="submit" class="btn btn-primary btn-sm float-right mt-3">Submit</button>


               </form>
            </div>
            <!-- /.container-fluid -->

            <br><br>

            <!-- Sticky Footer -->
            <footer class="sticky-footer mt-5">
               <div class="container">
                  <div class="row no-gutters">
                     <div class="col-lg-6 col-sm-6">
                        <p class="mt-1 mb-0">
                           <strong class="text-dark">Vidoe</strong>.
                           <small class="mt-0 mb-0"><a class="text-primary" target="_blank" href="https://templatespoint.net/">TemplatesPoint</a> </small>
                        </p>
                     </div>
                     <div class="col-lg-6 col-sm-6 text-right">
                        <div class="app">
                           <a href="#"><img alt="" src="assets/img/google.png" /></a>
                           <a href="#"><img alt="" src="assets/img/apple.png" /></a>
                        </div>
                     </div>
                  </div>
               </div>
            </footer>
         </div>

         <!-- /.content-wrapper -->
      </div>
      <!-- /#wrapper -->
      <!-- Scroll to Top Button-->


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

</php>