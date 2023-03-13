<?php include('./include/config.php'); ?>
<?php include('./include/setting.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include('./include/header.php'); ?>
</head>

<body>
    <!-- Top Bar Start -->
    <?php include('./include/head.php'); ?>
    <!-- Left Sidenav -->
    <?php include('./include/sidemenu.php'); ?>
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">

                            <h4 class="page-title"> Blog Profile</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div><!-- end page title end breadcrumb -->



            </div><!-- container -->

            <button class="btn btn-success"> <a href="<?php echo site_Url; ?>admin/addblog.php" style="color:white">Add
                    Blog Profile</a> </button>

            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                <?php
                $sel = "select * from blogs";
                $sel_q = mysqli_query($conn,$sel);
                while ($sel_res = mysqli_fetch_array($sel_q, MYSQLI_BOTH))

                {
                ?>
                <tr>
                    <td><?php echo $sel_res['id']; ?></td>
                    <td><?php echo $sel_res['title']; ?></td>
                    <td><?php echo $sel_res['status']; ?></td>
                    <td><a href="blogprofileedit.php?id=<?php echo $sel_res['id']; ?>"
                            class="ti-pencil-alt btn btn-success"></a></td>
                </tr>

                <?php
                }
                ?>
            </table>

    
            <?php include('./include/footer.php'); ?>