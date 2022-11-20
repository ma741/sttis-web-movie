<?php
include "../../config.php";
session_start();

if ($_SESSION['id'] == "") {
  header("location:../../login.php?pesan=no_login");
}

$id = $_SESSION['id'];

$query = mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
$user = mysqli_fetch_assoc($query);

?>

<!DOCTYPE php>
<php lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">

    <title>Kampus Cinema</title>
   <!-- Favicon Icon -->
   <link rel="icon" type="image/png" href="../../assets/img/logo_besar.png">
    <!-- Bootstrap core CSS-->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="../../assets/css/osahan.css" rel="stylesheet">
    
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="../../assets/vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../../assets/vendor/owl-carousel/owl.theme.css">

	<script src="../../assets/vendor/bootstrap/js/jquery.js"></script>
	<script src="../../assets/vendor/bootstrap/js/bootstrap.js"></script>

	<link rel="stylesheet" href="../../assets/vendor/DataTables/DataTables/css/dataTables.bootstrap.css">
	<script src="../../assets/vendor/DataTables/datatables.min.js"></script>



  </head>




  <body id="page-top">

    <nav class="warna-navbar navbar navbar-expand navbar-dark  static-top osahan-nav sticky-top fixed-top">

      &nbsp;&nbsp;
      <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
      </button>
      &nbsp;&nbsp;
      <a class="navbar-brand mr-1" href="index.html"><img class="img-fluid" alt="" src="../../assets/img/logo.png"></a>
      <!-- Navbar Search -->
      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." />
          <div class="input-group-append">
            <button class="btn btn-light" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">


        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit"></i> &nbsp; Action</a>
            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt"></i> &nbsp; Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-success">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit"></i> &nbsp; Action</a>
            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt"></i> &nbsp; Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow osahan-right-navbar-user">
          <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img alt="Avatar" src="../../assets/file/<?= $user['photo']; ?>" />
            <?php echo $user['username'];  ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="account.php"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My Account</a>
            <a class="dropdown-item" href="settings.php"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../../logout.php"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
          </div>
        </li>
      </ul>
    </nav>

    <!-- Sidebar -->
    <div id="wrapper">

      <ul class="warna-navbar sidebar  navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>

        <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-fw fa-folder"></i>
               <span>Data</span>
               </a>
               <div class="dropdown-menu">
                  <h6 class="dropdown-header">Users:</h6>
                  <a class="dropdown-item" href="category.php">Category</a>
                  <a class="dropdown-item" href="analitycs.php">Analitycs</a>
                  <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                  <div class="dropdown-divider"></div>
                  <h6 class="dropdown-header">Other Pages:</h6>
                  <a class="dropdown-item" href="404.html">404 Page</a>
                  <a class="dropdown-item" href="blank.html">Blank Page</a>
               </div>
            </li>

        <li class="nav-item">
          <a class="nav-link" href="video-page.php">
            <i class="fas fa-fw fa-video"></i>
            <span>Video Page</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="upload.php">
            <i class="fas fa-fw fa-upload"></i>
            <span>Upload Video</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="content.php">
            <i class="fas fa-fw fa-upload"></i>
            <span>Kontent</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="content.php">
            <i class="fas fa-fw fa-upload"></i>
            <span>Analitycs</span>
          </a>
        </li>

        

        <li class="nav-item  channel-sidebar-list"></li>

        <li class="nav-item">
          <a class="nav-link " href="../../logout.php" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
        </li>


      </ul>










