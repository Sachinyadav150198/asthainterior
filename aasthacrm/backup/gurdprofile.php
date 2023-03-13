<?php include('./include/config.php'); ?>
<?php include('./include/setting.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>URVYA Security - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left"><a href="<?php echo site_Url; ?>" class="logo"><span><img src="./images/logo.svg"
                        alt="logo-small" class="logo-sm" style="height: 44px;"> </span></a></div>
        <!--end logo-->
        <!-- Navbar -->
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-right mb-0">

                <li class="dropdown"><a class="nav-link dropdown-toggle waves-effect waves-light nav-user"
                        data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img
                            src="assets/images/users/user-1.png" alt="profile-user" class="rounded-circle"> <span
                            class="ml-1 nav-user-name hidden-sm"> Admin <i class="mdi mdi-chevron-down"></i></span></a>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i
                                class="ti-user text-muted mr-2"></i> Profile</a>
                        <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="#"><i
                                class="ti-power-off text-muted mr-2"></i> Logout</a>
                    </div>
                </li>
            </ul>
            <!--end topbar-nav-->

        </nav><!-- end navbar-->
    </div><!-- Top Bar End -->
    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <ul class="metismenu left-sidenav-menu">
            <li><a href="javascript: void(0);"><i class="ti-bar-chart"></i><span>Dashboard</span><span
                        class="menu-arrow"><i class="ti-arrow-circle-down"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_Url; ?>gurdprofile.php"><i
                                class="ti-control-record"></i>Gurd
                            Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Super
                            Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Field
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Client
                            Profile</a></li>
                </ul>
            </li>

        </ul>
    </div><!-- end left-sidenav-->
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">

                            <h4 class="page-title"> Show Profile</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div><!-- end page title end breadcrumb -->



            </div><!-- container -->

            <button class="btn btn-success"> <a href="<?php echo site_Url; ?>addgurd.php" style="color:white">Add Gurd Profile</a> </button>

            <table  class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php
                $sel = "select * from blog ORDER BY id";
                $sel_q = mysqli_query($conn,$sel);
                while($sel_res = mysqli_fetch_array($sel_q,MYSQLI_BOTH))
               
                {
                ?>
                <tr>
                    <td><?php echo $sel_res['id']; ?></td>
                    <td><?php echo $sel_res['user_name']; ?></td>
                    <td><?php echo $sel_res['user_mobile']; ?></td>
                    <td><?php echo $sel_res['date']; ?></td>
                    <td><?php echo $sel_res['action']; ?></td>
                    <td><a href="gurdprofileedit.php?id=<?php echo $sel_res['id']; ?>" class="fa fa-edit btn btn-success"></a></td>
                </tr>
                <?php
                }
                ?>
            </table>


            <footer class="footer text-center text-sm-left">&copy; 2023 URVYA Security <span
                    class="text-muted d-none d-sm-inline-block float-right">Crafted with <i
                        class="mdi mdi-heart text-danger"></i> by URVYA Security</span></footer>
            <!--end footer-->
        </div><!-- end page content -->
    </div><!-- end page-wrapper -->
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="plugins/apexcharts/apexcharts.min.js"></script>
    <script src="plugins/moment/moment.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="assets/pages/jquery.analytics_dashboard.init.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>