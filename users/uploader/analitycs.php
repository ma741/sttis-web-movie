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
        <link rel="icon" type="image/png" href="../../assets/img/google.png">
        <!-- Bootstrap core CSS-->
        <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="../../assets/css/osahan.css" rel="stylesheet">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="../../assets/vendor/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="../../assets/vendor/owl-carousel/owl.theme.css">
        <!-- Highcharts -->
        <link rel="stylesheet" href="../../assets/vendor/Highcharts/">
    </head>




    <body id="page-top">

        <nav class="warna-navbar navbar navbar-expand navbar-dark  static-top osahan-nav sticky-top">

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
                        <?= $user['username'];  ?>
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
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <a class="dropdown-item" href="register.html">Register</a>
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
                    <a class="nav-link" href="analitycs.php">
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
                <div class="container-fluid upload-details">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-title ">
                                <h6 class="text-white">Content Analitycs</h6>
                            </div>


                        </div>

                    </div>

                    <!-- body -->
                    <div class="">

                        <!DOCTYPE HTML>
                        <html>

                        <head>
                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            <title>Highcharts Example</title>

                            <style type="text/css">
                                #container {
                                    height: 400px;
                                }

                                .highcharts-figure,
                                .highcharts-data-table table {
                                    min-width: 310px;
                                    max-width: 800px;
                                    margin: 1em auto;
                                }

                                .highcharts-data-table table {
                                    font-family: Verdana, sans-serif;
                                    border-collapse: collapse;
                                    border: 1px solid #ebebeb;
                                    margin: 10px auto;
                                    text-align: center;
                                    width: 100%;
                                    max-width: 500px;
                                }

                                .highcharts-data-table caption {
                                    padding: 1em 0;
                                    font-size: 1.2em;
                                    color: #555;
                                }

                                .highcharts-data-table th {
                                    font-weight: 600;
                                    padding: 0.5em;
                                }

                                .highcharts-data-table td,
                                .highcharts-data-table th,
                                .highcharts-data-table caption {
                                    padding: 0.5em;
                                }

                                .highcharts-data-table thead tr,
                                .highcharts-data-table tr:nth-child(even) {
                                    background: #f8f8f8;
                                }

                                .highcharts-data-table tr:hover {
                                    background: #f1f7ff;
                                }
                            </style>
                        </head>

                        <body>
                            <script src="../../assets/vendor/Highcharts/highcharts.js"></script>
                            <script src="../../assets/vendor/Highcharts/modules/exporting.js"></script>
                            <script src="../../assets/vendor/Highcharts/modules/export-data.js"></script>
                            <script src="../../assets/vendor/Highcharts/modules/accessibility.js"></script>

                            <figure class="highcharts-figure mt-2">
                                <div id="container"></div>
                                <p class="highcharts-description">
                                    This demo shows a smoothed area chart with an x-axis plot band
                                    highlighting an area of interest at the last two points. Plot bands
                                    and plot lines are commonly used to draw attention to certain areas or
                                    thresholds.
                                </p>
                            </figure>


                            <script type="text/javascript">
                                // Retrieved from https://www.ssb.no/jord-skog-jakt-og-fiskeri/jakt
                                Highcharts.chart('container', {
                                    chart: {
                                        type: 'areaspline'
                                    },
                                    title: {
                                        text: 'Grafik Tahun Uploader'
                                    },
                                    subtitle: {
                                        align: 'center',
                                        text: 'Source: <a href="https://www.ssb.no/jord-skog-jakt-og-fiskeri/jakt" target="_blank">SSB</a>'
                                    },
                                    legend: {
                                        layout: 'vertical',
                                        align: 'left',
                                        verticalAlign: 'top',
                                        x: 120,
                                        y: 70,
                                        floating: true,
                                        borderWidth: 1,
                                        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
                                    },

                                    yAxis: {
                                        title: {
                                            text: 'Quantity'
                                        }
                                    },
                                    tooltip: {
                                        shared: true,
                                        headerFormat: '<b>Hunting season starting autumn {point.x}</b><br>'
                                    },
                                    credits: {
                                        enabled: false
                                    },
                                    plotOptions: {
                                        series: {
                                            pointStart: 2022
                                        },
                                        areaspline: {
                                            fillOpacity: 0.5
                                        }
                                    },
                                    series: [{
                                        name: 'Video Uploads',
                                        data: [
                                            38000,
                                            37300,
                                            37892,
                                            38564,
                                            36770,
                                            36026,
                                            // 34978,
                                            // 35657,
                                            // 35620,
                                            // 35971,
                                            // 36409,
                                            // 36435,
                                            // 34643,
                                            // 34956,
                                            // 33199,
                                            // 31136,
                                            // 30835,
                                            // 31611,
                                            // 30666,
                                            // 30319,
                                            // 39966,
                                            // 39966,
                                            // 39966,
                                            // 39966,
                                            // 39966,
                                            // 39966
                                        ]
                                    }]
                                });
                            </script>
                        </body>

                        </html>
                    </div>

                    <hr>
                    <br>




                </div>
            </div>


            <?php include "footer.php"; ?>