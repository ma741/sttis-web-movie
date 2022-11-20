<?php
include "../../config.php";
session_start();

if ($_SESSION['id'] == "") {
  header("location:../../login.php?pesan=no_login");
}

$id = $_SESSION['id'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
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

      <div id="content-wrapper">
        <div class="container-fluid pb-0">
          <div class="top-mobile-search">
            <div class="row">
              <div class="col-md-12">
                <form class="mobile-search">
                  <div class="input-group">
                    <input type="text" placeholder="Search for..." class="form-control">
                    <div class="input-group-append">
                      <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="top-category section-padding text-center mb-4">
            <!-- btn -->
            <div class="btn btn-primary btn-sm">halo</div>
            <div class="btn btn-primary btn-sm">halo</div>
            <div class="btn btn-primary btn-sm">halo</div>
            <div class="btn btn-primary btn-sm">halo</div>
            <div class="btn btn-primary btn-sm">halo</div>
            <div class="btn btn-primary btn-sm">halo</div>
          </div>

          <div class="video-block section-padding">
            <div class="row">
              <div class="col-md-12">
                <div class="main-title">
                  <div class="btn-group float-right right-action">
                    <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                    </div>
                  </div>


                  <h6 class="text-white">Featured Videos</h6>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                  <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="../../assets/img/v1.png" alt=""></a>
                    <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                    <div class="video-title">
                      <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-success">
                      Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                    </div>
                    <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                  <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="../../assets/img/v2.png" alt=""></a>
                    <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                    <div class="video-title">
                      <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-success">
                      Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                    </div>
                    <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                  <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="../../assets/img/v3.png" alt=""></a>
                    <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                    <div class="video-title">
                      <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-danger">
                      Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Unverified"><i class="fas fa-frown text-danger"></i></a>
                    </div>
                    <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                  <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="../../assets/img/v4.png" alt=""></a>
                    <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                    <div class="video-title">
                      <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-success">
                      Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                    </div>
                    <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                  <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="../../assets/img/v5.png" alt=""></a>
                    <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                    <div class="video-title">
                      <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-success">
                      Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                    </div>
                    <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                  <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="../../assets/img/v6.png" alt=""></a>
                    <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                    <div class="video-title">
                      <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-danger">
                      Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Unverified"><i class="fas fa-frown text-danger"></i></a>
                    </div>
                    <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                  <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="../../assets/img/v7.png" alt=""></a>
                    <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                    <div class="video-title">
                      <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-success">
                      Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                    </div>
                    <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                  <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="../../assets/img/v8.png" alt=""></a>
                    <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                    <div class="video-title">
                      <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-success">
                      Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                    </div>
                    <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="video-block section-padding">
            <div class="row">

              <div class="col-xl-3 col-sm-6 ">
                <div class="video-card">
                  <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="../../assets/img/v1.png" alt=""></a>
                    <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                    <div class="video-title">
                      <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-success">
                      Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                    </div>
                    <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                  <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="../../assets/img/v2.png" alt=""></a>
                    <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                    <div class="video-title">
                      <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-success">
                      Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                    </div>
                    <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                  <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="../../assets/img/v3.png" alt=""></a>
                    <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                    <div class="video-title">
                      <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-danger">
                      Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Unverified"><i class="fas fa-frown text-danger"></i></a>
                    </div>
                    <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                  <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="../../assets/img/v4.png" alt=""></a>
                    <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                    <div class="video-title">
                      <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-success">
                      Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                    </div>
                    <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                  <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="../../assets/img/v5.png" alt=""></a>
                    <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                    <div class="video-title">
                      <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-success">
                      Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                    </div>
                    <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                  <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="../../assets/img/v6.png" alt=""></a>
                    <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                    <div class="video-title">
                      <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-danger">
                      Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Unverified"><i class="fas fa-frown text-danger"></i></a>
                    </div>
                    <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                  <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="../../assets/img/v7.png" alt=""></a>
                    <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                    <div class="video-title">
                      <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-success">
                      Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                    </div>
                    <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                  <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="../../assets/img/v8.png" alt=""></a>
                    <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                    <div class="video-title">
                      <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-success">
                      Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                    </div>
                    <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center pagination-sm mb-0">
                <li class="page-item disabled">
                  <a tabindex="-1" href="#" class="page-link">Previous</a>
                </li>
                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item">
                  <a href="#" class="page-link">Next</a>
                </li>
              </ul>
            </nav>
          </div>

        </div>
        <!-- /.container-fluid -->


        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container">
            <div class="row no-gutters">
              <div class="col-lg-6 col-sm-6">
                <p class="mt-1 mb-0"><strong class="text-dark">Vidoe</strong>.
                  <small class="mt-0 mb-0"><a class="text-primary" target="_blank" href="https://www.templatespoint.net/">Templates Point</a>
                  </small>
                </p>
              </div>
              <div class="col-lg-6 col-sm-6 text-right">
                <div class="app">
                  <a href="#"><img alt="" src="../../assets/img/google.png"></a>
                  <a href="#"><img alt="" src="../../assets/img/apple.png"></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->


    <?php include "footer.php"; ?>

</php>