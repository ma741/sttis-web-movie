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
                    <div class="col-md-4 mx-auto mt-5">
                        
                        <form action="proses/change_proses.php" method="post" enctype="multipart/form-data">
                            
                            <?php 
                            // session_start();

                            $id = $_GET['id'];
                            $_SESSION['id'] = $_GET['id'];
                            
                            ?>
                            <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                            
                            <div class="">
                                <label class="" for="">New Password *</label>
                                <input type="password" name="np" placeholder="New Password" class="form-control" required="required">
                            </div>



                            <div class="form-group mt-3">
                                <label>Confirm New Password *</label>
                                <input type="password" name="c_np" placeholder="Confirm New Password" class="form-control" required="required">
                            </div>




                            <!-- <button type="submit" class="btn btn-danger btn-sm float-right mt-3 ml-1">Cancel</button> -->
                            <button type="submit" name="submit" class="btn btn-primary btn-sm float-right mt-3 ">Save Changes</button>
                            <button type="submit" name="" class="btn btn-danger btn-sm float-right mt-3">Cancel</button>


                        </form>

                    </div>

                </div>
                <!-- /.container-fluid -->

                <br><br><br><br>
                <br><br><br><br>
                <br><br><br><br>
                <br><br><br><br>
                <br><br><br><br>
                <br><br><br><br>

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